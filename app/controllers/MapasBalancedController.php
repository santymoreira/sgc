<?php

class MapasBalancedController extends BaseController {

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
	public function cont_audi_bsc()
		{
			return View::make('mapasbalanced.cont_audi_bsc');
		}
	public function macroprocesosbsc()
		{
			return View::make('mapasbalanced.macroprocesosbsc');
		}
}