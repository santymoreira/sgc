<?php

class EmpresasController extends BaseController {

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
public function empresasgc()
		{
			return View::make('empresas.empresas_sgc');
		}
	public function macroprocesos()
	{
		return View::make('empresas.macroprocesos');
	}	
}