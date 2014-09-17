<?php 


class Login
{
        public $timestamps=false;

        public static function tiempoSesion()
        {
			$segundos = time();
        	$tiempo_transcurrido = $segundos;  
        	if (Session::get('intervalo') && Session::get('inicio')) 
        	{
            	$tiempo_maximo = Session::get('inicio') + ( Session::get('intervalo') * 60 ) ; 
            	if($tiempo_transcurrido > $tiempo_maximo)
            	{
                	return -1;
            	}
            	else
            	{
                	Session::put('inicio', time());
                	return 1;
            	}
        	}else
        	{return 0;}
        }  


         public static function logout()
    	{
        	Auth::logout();
        	Session::forget('tipo');
        	Session::forget('intervalo');
        	Session::forget('inicio');
        	return View::make('home.welcome');
    	}

    	 public static function tipoEmpleado()
    	{
        	//Auth::logout();
        	if (Session::get('tipo')) {
        		return Session::get('tipo');
        	}
        	else{
        		return -1;
        	}
        	
        	//return View::make('home.welcome');
    	}
}

?>
