@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesFade.css'); }}
  {{ HTML::script('js/LinksMacroprocesosFade.js'); }}
  
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio'); }} 
                       <li class="nivel1"><a class="nivel1" {{ HTML::link('fade/fade_sgc','SGC'); }}  
          </div> 
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
          	<img id="asistencia" style="cursor:pointer;" width="604" height="48" onclick="Asistencia()" src="{{ asset('images/Fade/asistencia.png') }}">
          </div>
          <div id="apDiv38">
          	<img id="academico" style="cursor:pointer;" onclick="Academico()"  width="604" height="48" src="{{ asset('images/Fade/academico.png') }}">
          </div>
          <div id="apDiv39">
          	<img id="financiero" style="cursor:pointer;" onclick="Financiero()" width="604" height="48" src="{{ asset('images/Fade/financiero.png') }}">
          </div>
          <div id="apDiv40">
          	<img id="mantenimiento" style="cursor:pointer;" onclick="Mantenimiento()" width="604" height="48" src="{{ asset('images/Fade/mantenimiento.png') }}">
          </div>
          <div id="apDiv41">
          	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/Fade/transporte.png') }}">
          </div>
          <div id="apDiv42">
          	<img id="informatico" style="cursor:pointer;" onclick="Informatico()" width="604" height="48"  src="{{ asset('images/Fade/informatico.png') }}">
          </div>             
   

       <!-- Footer -->     	
        <center>
		   <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
		</center>   

			
	</div>	
@stop