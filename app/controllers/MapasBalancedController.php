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
	public function AcredCarr()
		{
			return View::make('mapasbalanced.AcredCarr');
		}	
	public function AumentarSatis()
		{
			return View::make('mapasbalanced.AumentarSatis');
		}	
	public function FortaInterApre()
		{
			return View::make('mapasbalanced.FortaInterApre');
		}	
	public function ImpleSgc()
		{
			return View::make('mapasbalanced.ImpleSgc');
		}	
	public function PotenInnov()
		{
			return View::make('mapasbalanced.PotenInnov');
		}	
	public function PotenVincSociedad()
		{
			return View::make('mapasbalanced.PotenVincSociedad');
		}	
	public function DesarrCentrosApoyo()
		{
			return View::make('mapasbalanced.DesarrCentrosApoyo');
		}	
		public function PromvProyecSoc()
		{
			return View::make('mapasbalanced.PromvProyecSoc');
		}	
			public function FortaCapDocentes()
		{
			return View::make('mapasbalanced.FortaCapDoc');
		}	
			public function MejorarClimaLab()
		{
			return View::make('mapasbalanced.MejorarClimaLab');
		}
			public function PromoCoop()
		{
			return View::make('mapasbalanced.PromoCoop');
		}
		public function OptimiRecu()
		{
			return View::make('mapasbalanced.OptimiRecu');
		}
		public function ObtenerFinan()
		{
			return View::make('mapasbalanced.ObtenerFinan');
		}
}