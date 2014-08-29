<?php

class TransporteController extends BaseController {

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
		return View::make('home/welcome');
	}
	public function transportesgc()
	{
			return View::make('transporte.transporte_sgc');
	}
	public function macroprocesos()
	{
		return View::make('transporte.macroprocesos');
	}	
	public function administrativa()
	{
		return View::make('transporte.M_Administrativa');
	}
	public function academica()
	{
		return View::make('transporte.M_Academica');
	}
	public function docencia()
	{
		return View::make('transporte.M_Docencia');
	}
	public function investigacion()
	{
		return View::make('transporte.M_Investigacion');
	}
	public function vinculacion()
	{
		return View::make('transporte.M_Vinculacion');
	}
	public function asistencia()
	{
		return View::make('transporte.M_Asistencia');
	}
	public function mantenimiento()
	{
		return View::make('transporte.M_Mantenimiento');
	}		
}