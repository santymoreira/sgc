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
	public function empresas_bsc()
		{
			return View::make('mapasbalanced.empresas_bsc');
		}
	public function cont_audi_bsc()
		{
			return View::make('mapasbalanced.cont_audi_bsc');
		}
	public function finanzas_bsc()
		{
			return View::make('mapasbalanced.finanzas_bsc');
		}
	public function marketing_bsc()
		{
			return View::make('mapasbalanced.marketing_bsc');
		}
	public function transporte_bsc()
		{
			return View::make('mapasbalanced.transporte_bsc');
		}
	public function perspectivas()
		{
			return View::make('mapasbalanced.Perspectivas');
		}

	//Acciones

	public function PotenInves()
		{
			return View::make('mapasbalanced.PotenInves');
		}

}