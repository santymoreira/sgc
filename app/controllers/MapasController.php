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

	public function home()
		{
			return View::make('home.welcome');
		}
	public function distanciasgc()
		{
			if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
        				# code...
        				return View::make('mapas.distancia_sgc');
        			}else{//sgc/public/contabilidad/cont_audi_sgc
        				//return View::make('home.sinAcceso');
        				View::make('mapas.distancia_sgc');
        			}
        	}
        	else{Login::logout();return View::make('home.welcome');}			
		}
	public function contabilidadsgc()
		{
			 $total=0;

                for ($i=1; $i <= 7; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.',2)');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                          $f1=$indicador->fecha1;
                         $f2=$indicador->fecha2;
                         //echo("<script>console.log('PHP: ".$total."');</script>");
                    }
                }
        	if ($this->permiso()==1) 
			{
        				return View::make('mapas.cont_audi_sgc')->with('total',$total);
        	}
        	else{Login::logout();return View::make('mapas.cont_audi_sgc')->with('total',$total);}	
		}	
	public function empresasgc()
		{
			 $total1=0;

                for ($i=1; $i <= 7; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.',1)');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total1+=$indicador->resultado;
                          $f1=$indicador->fecha1;
                         $f2=$indicador->fecha2;
                         //echo("<script>console.log('PHP: ".$total."');</script>");
                    }
                }
			if ($this->permiso()==1) 
			{

        				return View::make('mapas.empresas_sgc')->with('total1',$total1);
        	}
        	else{Login::logout();return View::make('mapas.empresas_sgc')->with('total1',$total1);}	
		}	
	public function exteriorsgc()
		{
			if ($this->permiso()==1) 
			{
        				return View::make('mapas.exterior_sgc');
        			
        	}
        	else{Login::logout();return View::make('mapas.exterior_sgc');}	
		}
	public function finanzasgc()
		{
			if ($this->permiso()==1) 
			{
        			
        				return View::make('mapas.finanzas_sgc');
  
        	}
        	else{Login::logout();return View::make('mapas.finanzas_sgc');}
		}	
	public function marketingsgc()
		{
			if ($this->permiso()==1) 
			{
        				return View::make('mapas.marketing_sgc');
        	}
        	else{Login::logout();return View::make('mapas.marketing_sgc');}	
		}	
	public function transportesgc()
		{
			if ($this->permiso()==1) 
			{
        				return View::make('mapas.transporte_sgc');
        	}
        	else{Login::logout();return View::make('mapas.transporte_sgc');}		
		}	
	public function macroprocesos()
	{
		if ($this->permiso()==1) 
			{
        				return View::make('mapas.macroprocesos');
        	}
        	else{Login::logout();return View::make('mapas.macroprocesos');}
	}	
	public function administrativa()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
        				# code...
        				return View::make('mapas.M_Administrativa');
        			}else{
        			 	return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			   return Redirect::back()->with('logout','logout');
        	}   
        else{Login::logout();}
        		return View::make('mapas.macroprocesos');
	}
	public function academica()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
        				# code...
        				return View::make('mapas.M_Academica');
        			}else{
        					return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        		 		return Redirect::back()->with('logout','logout');
        	}else{Login::logout();}
        		return View::make('mapas.macroprocesos');
	}
	public function docencia()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
        				# code...
        				return View::make('mapas.M_Docencia');
        			}else{
        				return Redirect::back()->with('denied','denied');
        			}
        	}
			elseif ($this->permiso()==0) {
        			return Redirect::back()->with('logout','logout');
        	}else{Login::logout();}
        		return View::make('mapas.macroprocesos');
	}
	public function investigacion()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
        				# code...
        				return View::make('mapas.M_Investigacion');
        			}else{
        				return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        		 	return Redirect::back()->with('logout','logout');
        	}else{Login::logout();}
        		return View::make('mapas.macroprocesos');
	}
	public function vinculacion()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
        				# code...
        				return View::make('mapas.M_Vinculacion');
        			}else{
        				return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			 return Redirect::back()->with('logout','logout');
        	}else{Login::logout();}
        		return View::make('mapas.macroprocesos');
	}
	public function asistencia()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
        				# code...
        				return View::make('mapas.M_Asistencia');
        			}else{
        				return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			return Redirect::back()->with('logout','logout');
        	}else{Login::logout();}
        		return View::make('mapas.macroprocesos');
	}
	public function mantenimiento()
	{
		if ($this->permiso()==1) 
			{
        			if ($this->getEscuela()==1) {
        				# code...
        				return View::make('mapas.M_Mantenimiento');
        			}else{
        			return Redirect::back()->with('denied','denied');
        			}
        	}elseif ($this->permiso()==0) {
        			return Redirect::back()->with('logout','logout');
        	}else{Login::logout();}
        		return View::make('mapas.macroprocesos');
	}
	public function creditos()
	{;
		return View::make('Creditos');
	}
}

