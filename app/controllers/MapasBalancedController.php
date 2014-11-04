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
	//Permisos
	public function getEscuela()
	{
		$escuelaEmpleado=0;
		$escuelaIngresada=Session::get('escuela');
		 $tipo=Login::tipoEmpleado();
		$cod=Auth::user()->COD_EMPLEADO;
		$esc = DB::select('SELECT ee.COD_ESCUELA FROM empleado as e inner join empleado_escuela as ee on e.COD_EMPLEADO=ee.COD_EMPLEADO  where e.COD_EMPLEADO=?',array($cod));
		if ($tipo==1 || $tipo==2) {
			$escuelaEmpleado=1;
		}
		 foreach ($esc as $e) 
		 { 
		 	$es=$e->COD_ESCUELA; 
		 	if ($es==$escuelaIngresada) {
		 		$escuelaEmpleado=1;
		 	}
		 }
		 return $escuelaEmpleado;
	}
	public function permiso()
		{
			return Login::tiempoSesion();
		}
	



	//Ruteamiento de Views - Routes
	public function home()
		{
			return View::make('home.welcome');
		}     
	public function empresas_bsc()
		{
			$total=0;
                for ($i=20; $i <= 24; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.',1)');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                    }
                }
			if ($this->permiso()==1) 
			{
        		return View::make('mapasbalanced.empresas_bsc')->with('total',$total);
        	}
        	else{Login::logout(); return View::make('mapasbalanced.empresas_bsc')->with('total',$total);}
		}
	public function cont_audi_bsc()
		{
			$total=0;
                for ($i=20; $i <= 24; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.',2)');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                    }
                }
			if ($this->permiso()==1) 
			{
				return View::make('mapasbalanced.cont_audi_bsc')->with('total',$total);
			}
        	else{Login::logout(); return View::make('mapasbalanced.cont_audi_bsc')->with('total',$total);	}
		}
	public function finanzas_bsc()
		{
			$total=0;
                for ($i=20; $i <= 24; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.',4)');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                    }
                }
			if ($this->permiso()==1) 
			{
        		return View::make('mapasbalanced.finanzas_bsc')->with('total',$total);
			}
        	else{Login::logout(); return View::make('mapasbalanced.finanzas_bsc')->with('total',$total);}
		}
	public function marketing_bsc()
		{
			$total=0;
                for ($i=20; $i <= 24; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.',5)');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                    }
                }
			if ($this->permiso()==1) 
			{
        		return View::make('mapasbalanced.marketing_bsc')->with('total',$total);
			}
        	else{Login::logout(); return View::make('mapasbalanced.marketing_bsc')->with('total',$total);}
		}
	public function transporte_bsc()
		{
			$total=0;
                for ($i=20; $i <= 24; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.',5)');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                    }
                }
			if ($this->permiso()==1) 
			{
        		return View::make('mapasbalanced.transporte_bsc')->with('total',$total);
			}
			else{Login::logout(); return View::make('mapasbalanced.transporte_bsc')->with('total',$total);}
		}
	public function fade_bsc()
		{
			$total=0;
                for ($i=20; $i <= 24; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.',8)');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                    }
                }
			if ($this->permiso()==1) 
			{
        		return View::make('mapasbalanced.fade_bsc')->with('total',$total);
			}
			else{Login::logout(); return View::make('mapasbalanced.fade_bsc')->with('total',$total);}
		}
	public function perspectivas()
		{
			if ($this->permiso()==1) 
			{
        		return View::make('mapasbalanced.Perspectivas');
			}		
        	else{Login::logout(); return View::make('mapasbalanced.Perspectivas');}
		}

	//Acciones

		public function PotenInves()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('mapasbalanced.PotenInves');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}
		public function AcredCarr()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('mapasbalanced.AcredCarr');
				}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');	
		}	
		public function AumentarSatis()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
							return View::make('mapasbalanced.AumentarSatis');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}	
		public function FortaInterApre()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
							return View::make('mapasbalanced.FortaInterApre');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}	
		public function ImpleSgc()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('mapasbalanced.ImpleSgc');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}	
		public function PotenInnov()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
							return View::make('mapasbalanced.PotenInnov');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}	
		public function PotenVincSociedad()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('mapasbalanced.PotenVincSociedad');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}	
		public function ImplenGestionProc()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
							return View::make('mapasbalanced.ImplenGestionProc');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}	
			public function FortaCapDocentes()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('mapasbalanced.FortaCapDoc');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}	
			public function MejorarClimaLab()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('mapasbalanced.MejorarClimaLab');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}
		public function OptimiRecu()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
						return View::make('mapasbalanced.OptimiRecu');
					}else{
        			 return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 	return Redirect::back()->with('logout','logout');
        			}   
      		 else{Login::logout();}
        		return View::make('mapasbalanced.Perspectivas');
		}
		
}