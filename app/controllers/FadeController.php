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
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Academica');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function calidad()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Calidad');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function docencia()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Docencia');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function investigacion()
	{

		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Investigacion');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function vinculacion()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Vinculacion');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function asistencia()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Asistencia');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function academico()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Academico');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function financiero()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Financiero');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function mantenimiento()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {	
						return View::make('fade.MF_Mantenimiento');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function transporte()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {	
						return View::make('fade.MF_Transporte');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');
	}
	public function informatico()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('fade.MF_Informatico');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('fade.fade_sgc');				
	}
}

