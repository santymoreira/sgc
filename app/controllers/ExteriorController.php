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
}