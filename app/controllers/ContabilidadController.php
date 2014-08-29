<?php

class ContabilidadController extends BaseController {

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
	public function contabilidadsgc()
		{
			return View::make('contabilidad.cont_audi_sgc');
		}
	public function macroprocesos()
	{
		return View::make('contabilidad.macroprocesos');
	}	
	public function administrativa()
	{
		return View::make('contabilidad.M_Administrativa');
	}
	public function academica()
	{
		return View::make('contabilidad.M_Academica');
	}
	public function docencia()
	{
		return View::make('contabilidad.M_Docencia');
	}
	public function investigacion()
	{
		return View::make('contabilidad.M_Investigacion');
	}
	public function vinculacion()
	{
		return View::make('contabilidad.M_Vinculacion');
	}
	public function asistencia()
	{
		return View::make('contabilidad.M_Asistencia');
	}
	public function mantenimiento()
	{
		return View::make('contabilidad.M_Mantenimiento');
	}
}