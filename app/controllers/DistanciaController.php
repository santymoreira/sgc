<?php

class DistanciaController extends BaseController {

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
		return View::malke('home/welcome');
	}
	public function distanciasgc()
		{
			return View::make('E_distancia.distancia_sgc');
		}
	public function macroprocesos()
	{
		return View::make('E_distancia.macroprocesos');
	}
	public function administrativa()
	{
		return View::make('E_distancia.M_Administrativa');
	}
	public function academica()
	{
		return View::make('E_distancia.M_Academica');
	}
	public function docencia()
	{
		return View::make('E_distancia.M_Docencia');
	}
	public function investigacion()
	{
		return View::make('E_distancia.M_Investigacion');
	}
	public function vinculacion()
	{
		return View::make('E_distancia.M_Vinculacion');
	}
	public function asistencia()
	{
		return View::make('E_distancia.M_Asistencia');
	}
	public function mantenimiento()
	{
		return View::make('E_distancia.M_Mantenimiento');
	}	
}