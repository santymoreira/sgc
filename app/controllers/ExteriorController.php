<?php

class ExteriorController extends BaseController {

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
	public function home()
	{
			return View::make('home.welcome');
	}
	public function exteriorsgc()
	{
			return View::make('C_exterior.exterior_sgc');
	}
	public function macroprocesos()
	{
		return View::make('C_exterior.macroprocesos');
	}
	public function administrativa()
	{
		return View::make('C_exterior.M_Administrativa');
	}
	public function academica()
	{
		return View::make('C_exterior.M_Academica');
	}
	public function docencia()
	{
		return View::make('C_exterior.M_Docencia');
	}
	public function investigacion()
	{
		return View::make('C_exterior.M_Investigacion');
	}
	public function vinculacion()
	{
		return View::make('C_exterior.M_Vinculacion');
	}
	public function asistencia()
	{
		return View::make('C_exterior.M_Asistencia');
	}
	public function mantenimiento()
	{
		return View::make('empresas.M_Mantenimiento');
	}		
}