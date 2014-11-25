<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$valor=0;
        $tot=0;
        $temp =1;
        for ($i=1; $i <=7 ; $i++) 
        { 
            //escuela
                $total=0;
                for ($j=1; $j <= 6; $j++) 
                { 
                    
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.','.$j.')');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->avance;
                    }
                    
                }
                $tot=$total/6;
                $valor+=$tot;

        }
        $file = DB::select('SELECT * FROM documento where TIPO=?',array(0));
        return View::make('home.welcome', array('temp' => $temp,'valor' => $valor,'files' => $file));
	}

		public function envio()
	{
		if (Request::ajax()) {
		$nombre=Input::get('fec1');
		$apellido=Input::get('fec2');
		$dd='si';
		$ee='no';
		$datooos="{'nombre':'$nombre','apellido':'$apellido'}";
		return Response::json($datooos);
		}

	}

			public function envios()
	{
		if (Request::ajax()) {
		$proceso=Input::get('proceso');
		$responsable=Input::get('responsable');
		return Response::json($proceso);
	}
	}

	public function envios_ajax()
	{
		if (Request::ajax()) {
		$proceso=Input::get('fec1');
		$responsable=Input::get('fec2');
		$resp='si';
		return Response::json($resp);
		}
	}

	public function subirArchivoPublico()
	{
		$tiempo=Login::tiempoSesion();
            $tipo=Login::tipoEmpleado();
            if ($tiempo == 1) 
            {
                if (($tipo==1))
                {
                	return View::make('home.subirArchivo');

                }   
                else
                {
                    return View::make('home.sinAcceso');
                }
                 
            }elseif ($tiempo == -1) {
                Login::logout();
                return Redirect::to('welcome');
            }
            else
            {
                return View::make('home.sinAcceso');
            }
	}

		public function uploadPublicFile()	
	{
		$name=Input::get('name');
		$des=Input::get('desc');
		$address="archivos/".$name.".pdf";
		$date=date("Y-m-d H:i:s");
		$var=0;
			//echo("<script>console.log('PHP: ".$var."');</script>");
          Input::file('file1')->move('archivos', Input::get('name').".pdf");
          $d=DB::statement('call subirArchivo(\''.$name.'\',\''.$des.'\',\''.$address.'\',\''.$date.'\',\''.$var.'\')');

          Session::flash('message','Actualizado correctamente!');
		  Session::flash('class','success');
       
        return Redirect::back();
	}

		public function eliminar($a)
	{
		$eliminado = DB::delete('DELETE FROM documento WHERE NOMBRE = ? ', array($a) );
		return Redirect::back();
	}

	 
}
