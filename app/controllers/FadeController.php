<?php

class FadeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	
	*/
	public function getEscuela()
	{
		$escuelaEmpleado=0;
		$escuelaIngresada=Session::get('escuela');
		 $tipo=Login::tipoEmpleado();
		$cod=Auth::user()->COD_EMPLEADO;
		$esc = DB::select('SELECT ee.COD_ESCUELA FROM empleado as e inner join empleado_escuela as ee on e.COD_EMPLEADO=ee.COD_EMPLEADO  where e.COD_EMPLEADO=?',array($cod));
		if ($tipo==1 || $tipo==2) {
			$escuelaEmpleado=1;
		}
		 foreach ($esc as $e) 
		 { 
		 	$es=$e->COD_ESCUELA; 
		 	if ($es==$escuelaIngresada) {
		 		$escuelaEmpleado=1;
		 	}
		 }
		 return $escuelaEmpleado;
	}
	public function permiso()
		{
			return Login::tiempoSesion();
		}

	public function home()
	{
		return View::make('home.welcome');
	}
	public function fadesgc()
	{
		if ($this->permiso()==1) 
			{
				return View::make('fade.fade_sgc');
			}
			else{Login::logout(); return View::make('fade.fade_sgc');}
	}
	public function macroprocesos()
	{
		if ($this->permiso()==1) 
			{
				return View::make('fade.macroprocesos');
			}
			else{Login::logout(); return View::make('fade.macroprocesos');}
	}
	public function administrativa()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Administrativa');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function academica()
	{
		return View::make('fade.MF_Academica');
	}
	public function calidad()
	{
		return View::make('fade.MF_Calidad');
	}
	public function docencia()
	{
		return View::make('fade.MF_Docencia');
	}
	public function investigacion()
	{
		return View::make('fade.MF_Investigacion');
	}
	public function vinculacion()
	{
		return View::make('fade.MF_Vinculacion');
	}
	public function asistencia()
	{
		return View::make('fade.MF_Asistencia');
	}
	public function academico()
	{
		return View::make('fade.MF_Academico');
	}
	public function financiero()
	{
		return View::make('fade.MF_Financiero');
	}
	public function mantenimiento()
	{
		return View::make('fade.MF_Mantenimiento');
	}
	public function transporte()
	{
		return View::make('fade.MF_Transporte');
	}
	public function informatico()
	{
		return View::make('fade.MF_Informatico');
	}



}

