<?php

class FadeController extends BaseController {

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
	public function fadesgc()
	{
		return View::make('fade.fade_sgc');
	}
	public function macroprocesos()
	{
		return View::make('fade.macroprocesos');
	}
	public function administrativa()
	{
		return View::make('fade.MF_Administrativa');
	}
	public function academica()
	{
		return View::make('fade.MF_Academica');
	}
	public function calidad()
	{
		return View::make('fade.MF_Calidad');
	}
	public function docencia()
	{
		return View::make('fade.MF_Docencia');
	}
	public function investigacion()
	{
		return View::make('fade.MF_Investigacion');
	}
	public function vinculacion()
	{
		return View::make('fade.MF_Vinculacion');
	}
	public function asistencia()
	{
		return View::make('fade.MF_Asistencia');
	}
	public function academico()
	{
		return View::make('fade.MF_Academico');
	}
	public function financiero()
	{
		return View::make('fade.MF_Financiero');
	}
	public function mantenimiento()
	{
		return View::make('fade.MF_Mantenimiento');
	}
	public function transporte()
	{
		return View::make('fade.MF_Transporte');
	}
	public function informatico()
	{
		return View::make('fade.MF_Informatico');
	}



}

