<?php

class MapasController extends BaseController {

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
	public function distanciasgc()
		{
			return View::make('mapas.distancia_sgc');
		}
	public function contabilidadsgc()
		{
			return View::make('mapas.cont_audi_sgc');
		}	
	public function empresasgc()
		{
			return View::make('mapas.empresas_sgc');
		}	
	public function exteriorsgc()
		{
			return View::make('mapas.exterior_sgc');
		}
	public function finanzasgc()
		{
			return View::make('mapas.finanzas_sgc');
		}	
	public function marketingsgc()
		{
			return View::make('mapas.marketing_sgc');
		}	
	public function transportesgc()
		{
			return View::make('mapas.transporte_sgc');
		}	
	public function macroprocesos()
	{
		return View::make('mapas.macroprocesos');
	}	
	public function administrativa()
	{
		return View::make('mapas.M_Administrativa');
	}
	public function academica()
	{
		return View::make('mapas.M_Academica');
	}
	public function docencia()
	{
		return View::make('mapas.M_Docencia');
	}
	public function investigacion()
	{
		return View::make('mapas.M_Investigacion');
	}
	public function vinculacion()
	{
		return View::make('mapas.M_Vinculacion');
	}
	public function asistencia()
	{
		return View::make('mapas.M_Asistencia');
	}
	public function mantenimiento()
	{
		return View::make('mapas.M_Mantenimiento');
	}
}