<?php 
class ReportesController extends BaseController {


      public function individual($cod)
    {
        $ci=Auth::user()->COD_EMPLEADO;
        $tipos=DB::select('SELECT TE.COD_TIPO,TE.DESCRIPCION FROM empleado_tipo AS ET INNER JOIN empleado AS E 
        	ON E.COD_EMPLEADO=ET.COD_EMPLEADO INNER JOIN tipo_empleado AS TE 
        	ON TE.COD_TIPO=ET.COD_TIPO INNER JOIN empleado_escuela AS EMES 
        	ON EMES.COD_EMPLEADO= E.COD_EMPLEADO INNER JOIN escuela AS ES 
        	ON ES.COD_ESCUELA=EMES.COD_ESCUELA WHERE E.COD_EMPLEADO=73 AND ES.COD_ESCUELA=2');


        //$empleados = DB::select('SELECT NOMBRES FROM empleado WHERE CI='.$ci.';');
        $tipo=json_encode($tipos);

         return View::make('reportes.individual', array('empleados' => $tipos));
    }


    public function mostrarTipo()
    {
    	$tipos=DB::select('SELECT TE.COD_TIPO,TE.DESCRIPCION FROM empleado_tipo AS ET INNER JOIN empleado AS E 
        	ON E.COD_EMPLEADO=ET.COD_EMPLEADO INNER JOIN tipo_empleado AS TE 
        	ON TE.COD_TIPO=ET.COD_TIPO INNER JOIN empleado_escuela AS EMES 
        	ON EMES.COD_EMPLEADO= E.COD_EMPLEADO INNER JOIN escuela AS ES 
        	ON ES.COD_ESCUELA=EMES.COD_ESCUELA WHERE E.COD_EMPLEADO=73 AND ES.COD_ESCUELA=2');
    	$tipo=json_encode($tipos);
    	$response = isset($_GET['callback'])?$_GET['callback']."(".$tipo.")":$tipo; 
    	echo $response;
    }

    public function proceso()
    {
    	$opcion=Input::get('op');
    	$usuarios = DB::table('proceso')->where('TIPO_EMPLEADO', '=', $opcion)->get();
    	 return View::make('reportes.procesos', array('empleados' => $usuarios));
    	 //return View::make('reportes.procesos');
    }

}
?>