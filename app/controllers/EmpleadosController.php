<?php 
class EmpleadosController extends BaseController {
        //echo("<script>console.log('PHP: ".$tiempo."');</script>");

    //metodos Memcached
 /*   public function memcachedEmpleados($tipoEmpleado,$escuela)
    {
        $empleados = Cache::remember(''.$tipoEmpleado.'empleados', 60, function() use ($tipoEmpleado,$escuela)
        { 
            return DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
        }); 
        return $empleados;
       
     } */



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
 
    #primer paso para la evaluación, recibe los parámetros y los envía a la primera vista que es encargada de mostrar
    #el encabezado y las fechas
     public function encabezadoEvaluacion($a,$b,$c,$d,$e,$f,$g)
    {
        #verifica si el tiempo de sesion aún no ha expirado
        $tiempo=Login::tiempoSesion();
        #recibe el tipo de empleado actual
        $tipo=Login::tipoEmpleado();
        #verifica si el tiempo esta vigente
        if ($tiempo==1) 
        {
            #verifica si es administrador
            if ($tipo==1) 
            {
                return View::make('empleados.evaluacion', array('procesos' => $a,'docentes' => $b,'macroproceso' => $c,'escuela' => $d,'proceso' => $e,'tipo' =>$f,'objeto' =>$g));
            }   
            else
            {
                return View::make('home.sinAcceso');
            }
        }else{
            Login::logout();
            return View::make('home.sinAcceso');
        }
    }

        public function contenidoEvaluacion()
    {
        #verifica si el tiempo de sesion aún no ha expirado
        $tiempo=Login::tiempoSesion();
        #recibe el tipo de empleado actual
        $tipo=Login::tipoEmpleado();
        #verifica si el tiempo esta vigente
        if ($tiempo==1) 
        {
            #verifica si es administrador
                $macroproceso=Input::get('macro');
                $escuela=Input::get('escuela');
                $fecha1=Input::get('fecha1');
                $fecha2=Input::get('fecha2');
                $proceso=Input::get('proceso');
                $tipoEmpleado=Input::get('tipo');
                $objeto=Input::get('objeto');
                $tiempod=Login::tiempoSesion();

                //ejecutar usando redis
                //---------------------
                //$empleados=$this->redisEmpleados($tipoEmpleado);
                //$valor=$this->redisValor($escuela,$macroproceso);

                //ejecutar usando memcached
                //-------------------------
              /*  $empleados=$this->memcachedEmpleados($tipoEmpleado,$escuela);
                $valor=$this->memcachedValor($escuela,$macroproceso); */

                //ejecutar accediendo a base de datos
                //$empleados = DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
                //$valor=Empleado::storedProcedureCall('call calcularValor( '.$escuela.','.$macroproceso.')');
                try {
                    $empleados = Cache::remember(''.$tipoEmpleado.'empleados', 60, function() use ($tipoEmpleado,$escuela)
                        { 
                        return DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
                         }); 
                } catch (Exception $e) {
                    $empleados = DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
                    $valor=Empleado::storedProcedureCall('call calcularValor( '.$escuela.','.$macroproceso.')');
                }


              
              
             
                //if (!$empleados) {
                 //   $empleados = DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
                //}




                if ($objeto==1) {
                    return View::make('empleados.contenido', array('empleados' => $empleados,'valor' => $valor,'fecha1'=>$fecha1,'fecha2'=>$fecha2,'macro'=>$macroproceso,'escuela'=>$escuela,'proceso'=>$proceso));
                }
                 if ($objeto==2) {
                    return View::make('empleados.contenido2', array('empleados' => $empleados,'valor' => $valor,'fecha1'=>$fecha1,'fecha2'=>$fecha2,'macro'=>$macroproceso,'escuela'=>$escuela,'proceso'=>$proceso));
                }
        }else{
            Login::logout();
            return View::make('home.sinAcceso');
        }


        
    }

        public function insertar()
    {
        #verifica si el tiempo de sesion aún no ha expirado
        $tiempo=Login::tiempoSesion();
        #recibe el tipo de empleado actual
        $tipo=Login::tipoEmpleado();
        #verifica si el tiempo esta vigente
        #
            if ($tiempo==1) 
        {
            #verifica si es administrador
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
                    $dd='yeah';
                    return Response::json($fechaFin);
                }
        }else{
            Login::logout();
            return View::make('home.sinAcceso');
        }
    }

      public function mostrarEmpBalance($a,$b,$c,$d,$e,$f)
    {
        $tiempo=Login::tiempoSesion();
        $tipo=Login::tipoEmpleado();
        //echo("<script>console.log('PHP: ".$tiempo."');</script>");
        if ($tiempo==1) 
        {
            if ($tipo==1) 
            {
                return View::make('empleados.evaluacionBalance', array('procesos' => $a,'macroproceso' => $b,'escuela' => $c,'proceso' => $d,'objeto' =>$e,'peso'=>$f));
            }   
        }else{
            Login::logout();
            return View::make('home.sinAcceso');
           // Redirect::back();
            //return View::make('home.welcome');
        }
        //echo("<script>console.log('PHP: ".$tipo."');</script>");
    }

 

 public function textoBusquedaBalance()
    {
         $f1=Input::get('fecha1');
        $f2=Input::get('fecha2');
        $macro=Input::get('macro');
        $escuela=Input::get('escuela');
        $proceso=Input::get('proceso');
        $objeto=Input::get('objeto');
        $peso=Input::get('peso');


         return View::make('empleados.textoBusquedaBalance', array('f1' => $f1,'f2' => $f2,'macro' => $macro,'escuela' => $escuela,'proceso' => $proceso,'objeto' => $objeto,'peso'=>$peso));
    }

     public function listadoBalance()
    {
    
         $f1=Input::get('fecha1');
        $f2=Input::get('fecha2');
        $macro=Input::get('macro');
        $escuela=Input::get('escuela');
        $proceso=Input::get('proceso');
        $objeto=Input::get('objeto');
        $peso=Input::get('peso');

         $empleados=Input::get('empleado');
         $ci=Input::get('ci');
           $nombres=Input::get('nombres');
           $mail=Input::get('mail');

           if ($objeto==1) {
               return View::make('empleados.listadoBalance', array('escuela' => $escuela,'empleados'=>$empleados,'ci'=>$ci,'nombres'=>$nombres,'f1'=>$f1,'f2'=>$f2,'macro'=>$macro,'escuela'=>$escuela,'proceso'=>$proceso,'objeto'=>$objeto,'peso'=>$peso));
           }else{
             return View::make('empleados.listadoBalance2', array('escuela' => $escuela,'empleados'=>$empleados,'ci'=>$ci,'nombres'=>$nombres,'f1'=>$f1,'f2'=>$f2,'macro'=>$macro,'escuela'=>$escuela,'proceso'=>$proceso,'objeto'=>$objeto,'peso'=>$peso));
           }

        
    }

      public function busquedaBalance()
    {
        $consulta=Input::get('consult');
        $macroproceso=Input::get('macro');
        $escuela=Input::get('escuela');
        $fecha1=Input::get('f1');
        $fecha2=Input::get('f2');
        $proceso=Input::get('proceso');
        $objeto=Input::get('objeto');
        $peso=Input::get('peso');

         // $tiempo=new Login();
        $tiempod=Login::tiempoSesion();

       // echo("<script>console.log('PHP: ".$escuela."');</script>");
        $empleados=DB::select("SELECT CI,COD_EMPLEADO,NOMBRES,EMAIL FROM empleado WHERE  NOMBRES LIKE '%".$consulta."%'");
            foreach ($empleados as $e) { $em=$e->NOMBRES; }
       // 
        //$empleados = DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE (et.COD_TIPO =1 OR et.COD_TIPO =4 OR et.COD_TIPO =5 OR et.COD_TIPO =6) AND et.COD_ESCUELA=?',array($escuela));
       // $valor=Empleado::storedProcedureCall('call calcularValor( '.$escuela.','.$macroproceso.')');
        
        return View::make('empleados.busquedaBalance', array('empleados' => $empleados,'fecha1'=>$fecha1,'fecha2'=>$fecha2,'macro'=>$macroproceso,'escuela'=>$escuela,'proceso'=>$proceso,'objeto'=>$objeto,'peso'=>$peso));
        //if ($objeto==1) {
        //    return View::make('empleados.busquedaBalance', array('empleados' => $empleados,'fecha1'=>$fecha1,'fecha2'=>$fecha2,'macro'=>$macroproceso,'escuela'=>$escuela,'proceso'=>$proceso));
        //}
         //if ($objeto==2) {
            //return View::make('empleados.contenido2', array('empleados' => $empleados,'valor' => $valor,'fecha1'=>$fecha1,'fecha2'=>$fecha2,'macro'=>$macroproceso,'escuela'=>$escuela,'proceso'=>$proceso));
        //}

    }

     //$empleados = DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on 
          //  e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array(4,2));
         //return View::make('empleados.evaluacionEmpleado', array('empleados' => $empleados));

            //return DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on 
           // e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array(4,2));
    public function evaluacionEmpleado()
    {
       
          $empleados = Cache::remember('listaEmpleadossdfgh', 60, function()
        { 

        }); 
         return View::make('empleados.evaluacionEmpleado', array('empleados' => $empleados));
    }





     public function insertarBalance()
    {
        if (Request::ajax()) {
            $opcion=Input::get('opcion');
            $empleado=Input::get('empleado');
            $escuela=Input::get('escuela');
            $proceso=Input::get('proceso');
            $macro=Input::get('macro');
            $porcentaje=Input::get('peso');
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