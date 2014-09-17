<?php 
class EmpleadosController extends BaseController {

      public function mostrarEmpleados()
    {
        $redis = Redis::connection();
        //$empleados=DB::table('proceso')->get();
        //$redis->set('proceso',json_encode($emplead));
        $empleados=$redis->get('proceso');
        $empleados = json_decode($empleados);

         return View::make('empleados.lista', array('empleados' => $empleados));
        /*
        $empleados = Cache::remember('proceso', 60, function()
        { 
            return DB::table('proceso')->get(); 
        });*/
              
       //$empleados=Cache::get('proceso');
    
        //$empleados=DB::table('proceso')->get(); 
        //return View::make('empleados.lista', array('empleados' => $empleados));
    }


    //metodos Memcached
    public function memcachedEmpleados($tipoEmpleado,$escuela)
    {
        $empleados = Cache::remember(''.$tipoEmpleado.'empleados', 60, function() use ($tipoEmpleado,$escuela)
        { 
            return DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
        }); 
        return $empleados;
       
    }

    public function memcachedValor($escuela,$macroproceso)
    {
         $valor=Cache::remember(''.$escuela.$macroproceso.'escuelaMacroproceso',60,function() use ($escuela,$macroproceso)
        {
            return Empleado::storedProcedureCall('call calcularValor( '.$escuela.','.$macroproceso.')');
        });
         return $valor;
    }

    //metodos Redis
    public function redisEmpleados($tipoEmpleado,$escuela)
    {
        if($empleados = Redis::get(''.$tipoEmpleado.'empleados'))
        {
            $empleados = json_decode($empleados);
        }
        /*else
        {
            $empleados=DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
            Redis::set(''.$tipoEmpleado.'empleados',json_encode($empleados));
        }*/
        return $empleados;
    }

    public function redisValor($escuela,$macroproceso)
    {
        //Redis::set(''.$escuela.$macroproceso.'escuelaMacroproceso',json_encode(Empleado::storedProcedureCall('call calcularValor( '.$escuela.','.$macroproceso.')')));
        $valor=json_decode(Redis::get(''.$escuela.$macroproceso.'escuelaMacroproceso'));
        return $valor;
    }
 
     public function mostrarEmp($a,$b,$c,$d,$e,$f,$g)
    {
        $tiempo=Login::tiempoSesion();
        $tipo=Login::tipoEmpleado();
        //echo("<script>console.log('PHP: ".$tiempo."');</script>");
        if ($tiempo==1) 
        {
            if ($tipo==1) 
            {
                return View::make('empleados.evaluacion', array('procesos' => $a,'docentes' => $b,'macroproceso' => $c,'escuela' => $d,'proceso' => $e,'tipo' =>$f,'objeto' =>$g));
            }   
        }else{
            Login::logout();
           // Redirect::back();
            //return View::make('home.welcome');
        }
        //echo("<script>console.log('PHP: ".$tipo."');</script>");
    }

     public function mostrarEmp3()
    {
        $macroproceso=Input::get('macro');
        $escuela=Input::get('escuela');
        $fecha1=Input::get('fecha1');
        $fecha2=Input::get('fecha2');
        $proceso=Input::get('proceso');
        $tipoEmpleado=Input::get('tipo');
        $objeto=Input::get('objeto');

         // $tiempo=new Login();
        $tiempod=Login::tiempoSesion();
        //$tiempo=$this->tiempoLogin();
        //echo("<script>console.log('PHP: ".$tiempod."');</script>");

        //ejecutar usando redis
        //---------------------
        //$empleados=$this->redisEmpleados($tipoEmpleado);
        //$valor=$this->redisValor($escuela,$macroproceso);

        //ejecutar usando memcached
        //-------------------------
        //$empleados=$this->memcachedEmpleados($tipoEmpleado);
        //$valor=$this->memcachedValor($escuela,$macroproceso);

        //ejecutar accediendo a base de datos
        //------
       // echo("<script>console.log('PHP: ".$escuela."');</script>");
        $empleados = DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
        $valor=Empleado::storedProcedureCall('call calcularValor( '.$escuela.','.$macroproceso.')');

        if ($objeto==1) {
            return View::make('empleados.contenido', array('empleados' => $empleados,'valor' => $valor,'fecha1'=>$fecha1,'fecha2'=>$fecha2,'macro'=>$macroproceso,'escuela'=>$escuela,'proceso'=>$proceso));
        }
         if ($objeto==2) {
            return View::make('empleados.contenido2', array('empleados' => $empleados,'valor' => $valor,'fecha1'=>$fecha1,'fecha2'=>$fecha2,'macro'=>$macroproceso,'escuela'=>$escuela,'proceso'=>$proceso));
        }

    }

    public function insertar()
    {
        if (Request::ajax()) {
            $opcion=Input::get('opcion');
            $empleado=Input::get('empleado');
            $escuela=Input::get('escuela');
            $proceso=Input::get('proceso');
            $macro=Input::get('macro');
            $porcentaje=Input::get('porcentaje');
            $fechaInicio=Input::get('fechaInicio');
            $fechaFin=Input::get('fechaFin');
            $texto1=Input::get('texto1');
            $texto2=Input::get('texto2');

            $d=DB::statement('call asignarValor('.$opcion.','.$macro.','.$empleado.','.$proceso.',\''.$fechaInicio.'\',\''.$fechaFin.'\','.$texto1.','.$texto2.','.$escuela.','.$porcentaje.')');
            $dd='fuck';
        return Response::json($fechaFin);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('tipo');
        Session::forget('intervalo');
        Session::forget('inicio');
        return View::make('home.welcome');
    }
}
?>