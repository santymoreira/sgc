@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesFade.css'); }}
  {{ HTML::script('js/LinksMacroprocesosFade.js'); }}
  {{ HTML::script('js/smoke.js'); }}
  {{ HTML::style('css/smoke.css');  }}
  
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				                <li class="nivel1"><a class="nivel1" href="../welcome">Inicio </a></li>
                       <li class="nivel1"><a class="nivel1" {{ HTML::link('fade/fade_sgc','SGC'); }}  
          </div> 
@stop
@section('modificar')
 @if (Auth::user())
    <!-- foto del usuario logueado -->
    @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
          <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no" >
              <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a>
          </div>
       @else  <!-- Foto por defencto del usuario logueado -->
            <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no">
              <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
            </a></div>
     @endif
     <!-- Carga nombres del usuario logueado -->
      <div id="nombres" width="20" height="300">
         <p><b>{{ Auth::user()->NOMBRES }}</b></p> 
       </div> 
       </a>
    @else <!-- foto por defecto usuario no logueado -->
       <div id="fotoperfil"><img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>
    @endif
  @stop
@section('login')
 @parent
   
@stop


@section('content')
@stop
@section('body')

	<div class="content-layout" >
	  		
	    <div id="apDiv21"><img src="{{ asset('images/Fade/contenedor.png') }}" width="917" height="1146"> </div>	
	
		<!-- Macroprocesos de la Facultad -->

		  <div id="apDiv31">
		  	<img src="{{ asset('images/Fade/administrativa.png') }}" width="604" height="48" id="administrativa" style="cursor:pointer;" onclick="Administrativa()">
		  </div>
          <div id="apDiv32">
          	<img src="{{ asset('images/Fade/academica.png') }}" width="604" height="48" id="academica" style="cursor:pointer;"  onclick="Academica()">
          </div>
          <div id="apDiv33">
          	<img id="calidad" style="cursor:pointer;" width="604" height="48" onclick="Calidad()" src="{{ asset('images/Fade/calidad.png') }}">
          </div>
          <div id="apDiv34">
          	<img id="docencia" style="cursor:pointer;" onclick="Docencia()" src="{{ asset('images/Fade/docencia.png') }}" width="196" height="63" >
          </div>
          <div id="apDiv35">
          	<img id="investigacion" style="cursor:pointer;" onclick="Investigacion()" src="{{ asset('images/Fade/investigacion.png') }}" width="196" height="63" >
          </div>
          <div id="apDiv36">
          	<img id="vinculacion" style="cursor:pointer;" onclick="Vinculacion()" src="{{ asset('images/Fade/vinculacion.png') }}" width="196" height="63">
          </div>
          <div id="apDiv37">
          	<img id="asistencia" style="cursor:pointer;" width="604" height="48" src="{{ asset('images/Fade/asistencia.png') }}">
          </div>
          <div id="apDiv38">
          	<img id="academico" style="cursor:pointer;" onclick="Academico()"  width="604" height="48" src="{{ asset('images/Fade/academico.png') }}">
          </div>
          <div id="apDiv39">
          	<img id="financiero" style="cursor:pointer;" onclick="Financiero()" width="604" height="48" src="{{ asset('images/Fade/financiero.png') }}">
          </div>
          <div id="apDiv40">
          	<img id="mantenimiento" style="cursor:pointer;" width="604"  height="48" src="{{ asset('images/Fade/mantenimiento.png') }}">
          </div>
          <div id="apDiv41">
          	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/Fade/transporte.png') }}">
          </div>
          <div id="apDiv42">
          	<img id="informatico" style="cursor:pointer;" onclick="Informatico()" width="604" height="48"  src="{{ asset('images/Fade/informatico.png') }}">
          </div>             
   
    <!-- Mensajes -->
            @if(Session::get('logout'))
                 <script type="text/javascript">
                    smoke.alert('Ud no tiene acceso, Inicie Sesión')
                 </script>
              @endif
           @if(Session::get('denied'))
                 <script type="text/javascript">
                    smoke.alert('Ud no tiene acceso, No pertenece a esta Escuela')
                 </script>
              @endif

                <script type="text/javascript">
                    function enconstruccion() {
                        smoke.alert('Este macroproceso se encuentra en construcción');
                      }
                      document.getElementById("mantenimiento").onclick = enconstruccion;
                      document.getElementById("asistencia").onclick = enconstruccion;
                </script>

        <!-- Footer --> 
          
           <div id="macrofade" class="cleared"> 
              <center> <p style="font-size:10px;color:#03F">&nbsp;</p>
                <p style="font-size:10px;color:#03F">&nbsp;</p>
                <p style="font-size:10px;color:#03F">&nbsp;</p>
               <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                          <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
                       </p>
              </center>
          </div>    
  </div>    
@stop