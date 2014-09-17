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
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.distancia_sgc');}
        	else{Login::logout();}			
		}
	public function contabilidadsgc()
		{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.cont_audi_sgc');}
        	else{Login::logout();}	
		}	
	public function empresasgc()
		{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.empresas_sgc');}
        	else{Login::logout();}	
		}	
	public function exteriorsgc()
		{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.exterior_sgc');}
        	else{Login::logout();}	
		}
	public function finanzasgc()
		{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.finanzas_sgc');}
        	else{Login::logout();}	
		}	
	public function marketingsgc()
		{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.marketing_sgc');}
        	else{Login::logout();}	
		}	
	public function transportesgc()
		{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.transporte_sgc');}
        	else{Login::logout();}	
		}	
	public function macroprocesos()
	{
		$tiempo=Login::tiempoSesion();
        $tipo=Login::tipoEmpleado();
        if ($tiempo==1 || $tiempo==0) {return View::make('mapas.macroprocesos');}
        else{Login::logout();}
	}	
	public function administrativa()
	{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.M_Administrativa');}
        	else{Login::logout();}	
	}
	public function academica()
	{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.M_Academica');}
        	else{Login::logout();}
	}
	public function docencia()
	{
		$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.M_Docencia');}
        	else{Login::logout();}
	}
	public function investigacion()
	{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.M_Investigacion');}
        	else{Login::logout();}
	}
	public function vinculacion()
	{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.M_Vinculacion');}
        	else{Login::logout();}
	}
	public function asistencia()
	{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.M_Asistencia');}
        	else{Login::logout();}
	}
	public function mantenimiento()
	{
			$tiempo=Login::tiempoSesion();
        	$tipo=Login::tipoEmpleado();
        	if ($tiempo==1 || $tiempo==0) {return View::make('mapas.M_Mantenimiento');}
        	else{Login::logout();}
	}
}