<?php 
class EmpleadosController extends BaseController {
    //public $empl;


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
    public function memcachedEmpleados($tipoEmpleado)
    {
        $empleados = Cache::remember(''.$tipoEmpleado.'empleados', 60, function() use ($tipoEmpleado)
        { 
            return DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE COD_TIPO ='.$tipoEmpleado.';');
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
    public function redisEmpleados($tipoEmpleado)
    {
        if($empleados = Redis::get(''.$tipoEmpleado.'empleados'))
        {
            $empleados = json_decode($empleados);
        }
        /*else
        {
            $empleados=DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE COD_TIPO ='.$tipoEmpleado.';');
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
 
     public function mostrarEmp($a,$b,$c,$d,$e,$f)
    {
        return View::make('empleados.evaluacion', array('procesos' => $a,'docentes' => $b,'macroproceso' => $c,'escuela' => $d,'proceso' => $e,'tipo' =>$f));
    }

     public function mostrarEmp3()
    {
        $macroproceso=Input::get('macro');
        $escuela=Input::get('escuela');
        $fecha1=Input::get('fecha1');
        $fecha2=Input::get('fecha2');
        $proceso=Input::get('proceso');
        $tipoEmpleado=Input::get('tipo');

        //ejecutar usando redis
        //---------------------
        $empleados=$this->redisEmpleados($tipoEmpleado);
        $valor=$this->redisValor($escuela,$macroproceso);

        //ejecutar usando memcached
        //-------------------------
        //$empleados=$this->memcachedEmpleados($tipoEmpleado);
        //$valor=$this->memcachedValor($escuela,$macroproceso);

        //ejecutar accediendo a base de datos
        //------
        //$empleados = DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE COD_TIPO ='.$tipoEmpleado.';');
       // $valor=Empleado::storedProcedureCall('call calcularValor( '.$escuela.','.$macroproceso.')');

        return View::make('empleados.contenido', array('empleados' => $empleados,'valor' => $valor,'fecha1'=>$fecha1,'fecha2'=>$fecha2,'macro'=>$macroproceso,'escuela'=>$escuela,'proceso'=>$proceso));
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
        return View::make('home.welcome');
    }
}
?>