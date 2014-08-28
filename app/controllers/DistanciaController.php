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
}