<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home.welcome');
	}

		public function envio()
	{
		if (Request::ajax()) {
		$nombre=Input::get('fec1');
		$apellido=Input::get('fec2');
		$dd='si';
		$ee='no';
		$datooos="{'nombre':'$nombre','apellido':'$apellido'}";
		return Response::json($datooos);
		}

	}

			public function envios()
	{
		if (Request::ajax()) {
		$proceso=Input::get('proceso');
		$responsable=Input::get('responsable');
		return Response::json($proceso);
	}
	}

	public function envios_ajax()
	{
		if (Request::ajax()) {
		$proceso=Input::get('fec1');
		$responsable=Input::get('fec2');
		$resp='si';
		return Response::json($resp);
		}
	}

	 
}
