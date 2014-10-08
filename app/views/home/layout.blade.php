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
   {{ HTML::script('js/LinksAcciones.js'); }}
 

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
  {{ HTML::style('css/jquery-ui-1.8.20.custom.css');  }}  

 
  <!-- Modal Editar Datos Personales -->

  {{ HTML::script('js/frameboxPerfil.js'); }}  
  <!--{{ HTML::style('css/floatboxPerfil.css'); }} -->
 

 
<!-- Modal Fichas procesos -->

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
                     <!--   <a href="DatosPersonales/index.php"  rel="floatbox"> -->
@if (Session::has('mensaje_login'))
<span>{{ Session::get('mensaje_login') }}</span>
@endif

                         <!--    <div id="fotoperfil"><img src="{{ asset('images/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>-->
@if (Auth::user())
<!--<div id="fotoperfil"><img src="images/{{Session::get('ci') }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>-->

@if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
   <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}"  rel="floatboxp" class="fbPopup1" ><img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a></div>
   @else
    <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}"  rel="floatboxp" class="fbPopup1" >
      <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
    </a></div>
   @endif
    <div id="nombres" width="20" height="300">
     <p><b>{{ Auth::user()->NOMBRES }}</b></p> 
   </div> 
   </a>
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
                              <li>{{ HTML::link('fade/fade_sgc', 'Facultad de Administración en Empresas'); }}</li>
                              <li>{{ HTML::link('empresas/empresas_sgc', 'Escuela de Ingeniería en Empresas'); }}</li>
                              <li>{{ HTML::link('contabilidad/cont_audi_sgc', 'Escuela de Ingeniería en Contabilidad y Auditoría'); }}</li>
                              <li>{{ HTML::link('C_exterior/exterior_sgc', 'Escuela de Ingeniería en Comercio Exterior'); }}</li>
                              <li>{{ HTML::link('finanzas/finanzas_sgc', 'Escuela de Ingeniería Financiera'); }}</li>
                              <li>{{ HTML::link('marketing/marketing_sgc', 'Escuela de Ingeniería en Marketing'); }}</li>
                              <li>{{ HTML::link('transporte/transporte_sgc', 'Escuela de Ingeniería en Gestión de Transporte'); }}</li>
                             
                          
                             
                    </ul>
                    </li>
                    <li class="nivel1"><a href="#" class="nivel1">BSC</a>
                    <ul class="dos">
                      <li><a href="#">Facultad de Administración en Empresas</a></li>
                        <li>{{ HTML::link('empresas/empresas_bsc', 'Escuela de Ingeniería en Empresas'); }}</li>
                        <li>{{ HTML::link('contabilidad/cont_audi_bsc', 'Escuela de Ingeniería en Contabilidad y Auditoría'); }}</li>
                        <li>{{ HTML::link('finanzas/finanzas_bsc', 'Escuela de Ingeniería Financiera'); }}</li>
                        <li>{{ HTML::link('marketing/marketing_bsc', 'Escuela de Ingeniería en Marketing'); }}</li>
                        <li>{{ HTML::link('transporte/transporte_bsc', 'Escuela de Ingeniería en Gestión de Transporte'); }}</li>
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
                  @if (Auth::user())
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
                                    <!--  <input type="text" name="username" id="username" />-->
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