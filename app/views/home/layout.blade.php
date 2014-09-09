<!doctype html>
<html>
<head>
	{{ HTML::script('js/smoke.js'); }}
	{{ HTML::script('js/jquery-1.8.2.min.js'); }}
	{{ HTML::script('js/ResponsiveTabs.js'); }}
	{{ HTML::script('js/login.js'); }}
	{{ HTML::script('js/opciones_presentacion.js'); }} 
  {{ HTML::script('js/ScriptEfectos.js'); }}
  {{ HTML::script('js/LinksMacroprocesosEsc.js'); }}

  <!--        estilo Facebook-->
{{ HTML::script('js/facebook.js'); }}

  <!--        estilo modal-->
  {{ HTML::script('js/jquery-ui-1.8.20.custom.min.js'); }} 
  {{ HTML::script('js/calendario.js'); }} 

	{{ HTML::style('css/smoke.css'); }}
	{{ HTML::style('css/estilo.css'); }}
	<!--        estilo cabecera-->
	{{ HTML::style('css/easy-responsive-tabs.css'); }}
	{{ HTML::style('css/floatbox.css'); }}
	{{ HTML::style('css/style.css'); }}
	{{ HTML::style('css/kik.css'); }}
	
  <!-- Menús de las páginas index y SGC -->
  @section('Different_Styles')
  {{ HTML::style('css/menu22.css'); }} 
  @show

  @section('not_general_styles')
  {{ HTML::style('css/floatbox.css'); }}
  {{ HTML::style('css/floatboxfichas.css'); }}
{{ HTML::script('js/frameboxfichas.js'); }}
  @show
 
 	<!--        estilo modal-->
  {{ HTML::style('css/style_tables.css'); }}
  {{ HTML::style('css/styles.css'); }}
  {{ HTML::style('css/select.css'); }}
  {{ HTML::style('css/feature_table.css'); }}
  {{ HTML::style('css/jquery-ui-1.8.20.custom.css'); }}
 
<!-- Modal Fichas procesos -->

@if (Session::has('tipo'))
  @foreach(Session::get('tipo') as $empleado)
          <tr>
              <td> {{ $empleado->COD_TIPO }} </td>
  @endforeach
@endif

 
   @section('cabeza')


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Sistema de Gestión de Calidad</title>
   </head>
   <body>

   		<div id="main">
        <div class="sheet">
            <div class="sheet-body">
                 <div class="header">
                    <div class="header-center">        
                        <a href="DatosPersonales/index.php"  rel="floatbox">

                         <!--    <div id="fotoperfil"><img src="{{ asset('images/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>-->
@if (Auth::user() && Session::get('tipo'))
<!--<div id="fotoperfil"><img src="images/{{Session::get('ci') }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>-->
<div id="fotoperfil"><img src="{{ asset('images/Login/'.Auth::user()->CI); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>
@else
   <div id="fotoperfil"><img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>
@endif


                           
                        </a>        
                        <div class="header-png"><img src="{{ asset('images/Utilitarios/header.png'); }}" width="1134" height="137" /> 
  @show  
                      @section('options')
                  	<div id="menu">
								<center><ul>
  									<li class="nivel1"><a href="#" class="nivel1">SGC</a>
										<ul class="uno">
                							 <li>{{ HTML::link('fade/fade_sgc', 'Facultad de Empresas'); }}</li>
                              <li>{{ HTML::link('transporte/transporte_sgc', 'Gestión de Trasporte'); }}</li>
                              <li>{{ HTML::link('empresas/empresas_sgc', 'Administración de Empresas'); }}</li>
                              <li>{{ HTML::link('marketing/marketing_sgc', 'Marketing'); }}</li>
                              <li>{{ HTML::link('contabilidad/cont_audi_sgc', 'Contabilidad y Auditoria'); }}</li>
                              <li>{{ HTML::link('E_distancia/distancia_sgc', 'Educación a Distancia'); }}</li>
                              <li>{{ HTML::link('C_exterior/exterior_sgc', 'Comercio Exterior'); }}</li>
                              <li>{{ HTML::link('finanzas/finanzas_sgc', 'Finanzas'); }}</li>
										</ul>
  									</li>
  									<li class="nivel1"><a href="#" class="nivel1">BSC</a>
										<ul class="dos">
											<li><a href="#">FADE</a></li>
											<li><a href="#">Gestion de Transporte</a></li>
                							<li><a href="#">Administracion de Empresas</a></li>
                							<li><a href="#">Marketing</a></li>
                							<li>{{ HTML::link('contabilidad/cont_audi_bsc', 'Contabilidad y Auditoria'); }}</li>
                							<li><a href="#">Educacion a Distancia</a></li>
                							<li><a href="#">Comercio Exterior</a></li>
                							<li><a href="#">Finanzas</a></li>
										</ul>
									</li>
  								</ul></center>
							</div>    
                    @show
                        </div>
                    </div>

                    @section('login')

                    <div id="container">
          				<div id="loginContainer">
                  @if (Auth::user() && Session::get('tipo'))
                			 <a href="{{ url('logout'); }}" id="loginButto">
                        <img id="imgLogin" src="{{ asset('images/Login/cerrar sesion.png'); }}" border=0>
                      </a>
                  @else
                  <a href="#" id="loginButton"><img id="imgLogin" src="{{ asset('images/Login/iniciar sesion.png'); }}" border=0></a>
                     
                  @endif


                			<div style="clear:both"></div>
                			<div id="loginBox">   
                    			<!--<form id="loginForm">-->
                          {{ Form::open(array('url' => 'layout','id'=>'loginForm')) }}
                        			<fieldset id="body">
                            			<fieldset>
                                			<label for="email">Usuario</label>
                                       {{Form::text('username');}}
                                		<!--	<input type="text" name="username" id="username" />-->
                            			</fieldset>
                            			<fieldset>
                                			<label for="password">Contraseña</label>
                                      {{Form::password('password');}}
                                			<!--<input type="password" name="password" id="password" />-->
                            			</fieldset>
                                  {{Form::submit('Iniciar Sesión', ['id' => 'login'])}}
                            			<!--<input type="button" id="login" value="Iniciar Sesión" />-->
                        			</fieldset>
                        			<span><a href="#">Registro SGC</a></span>
                    			<!--</form>-->
                          {{ Form::close() }}
                			</div>
            			</div>
          			</div>
                <div id="Logoheader"><img src="{{ asset('images/Utilitarios/SGCheader.png'); }}" width="426"></div> 
                 </div>

                    @show

                    

                 @section('body')

                 @show

                @yield('content')

   </body>
</html>