@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesVinculacionF.css'); }}
	 {{ HTML::script('js/LinksMacroprocesosFade.js'); }}

@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				       		<li class="nivel1"><a class="nivel1" {{ HTML::link('fade/fade_sgc', 'SGC'); }} 
                       		<li class="nivel1"><a class="nivel1" {{ HTML::link('fade/macroprocesos','Volver'); }}  
                       	</ul>			
          </div> 
@stop

@section('login')
 @parent
   
@stop


@section('content')
@stop
@section('body')

		<div class="content-layout" >
        	
        	<div id="apDiv31">
        		<img src="{{ asset('images/Fade/vinculacion/contenedor.png') }}">
        	</div>	

        	<!-- procesos de la vinculacion de la facultad -->

           <div id="apDiv163">
           		<img src="{{ asset('images/Fade/vinculacion/afec03-01.png') }}" id="afeg031" style="cursor:pointer">
           	</div>
	       <div id="apDiv181">
	       		<img src="{{ asset('images/Fade/vinculacion/afec03-02.png') }}" id="afeg032" style="cursor:pointer">
	       	</div>
	       <div id="apDiv182">
	       		<img src="{{ asset('images/Fade/vinculacion/afec03-03.png') }}" id="afeg033" style="cursor:pointer">
	       	</div>

		   <!-- códigos de los procesos de vinculacion fade -->			       

	       <div id="apDiv183">
	       		<img src="{{ asset('images/Fade/vinculacion/cod_afec03-01.png') }}" width="61" height="19" id="afeg03_1">
	       	</div>
	       <div id="apDiv184">
	       		<img src="{{ asset('images/Fade/vinculacion/cod_afec03-01.png') }}" width="61" height="19"  id="afeg03_2">
	       	</div>
	       <div id="apDiv185">
	       		<img src="{{ asset('images/Fade/vinculacion/cod_afec03-01.png') }}" width="61" height="19"  id="afeg03_3">
	       	</div>
	       
	     	<!-- macroprocesos de la facultad  -->

	     	<div id="apDiv105">
	     		<img src="{{ asset('images/Fade/administrativa.png') }}" width="604" height="48" id="administrativa" style="cursor:pointer;" onclick="Administrativa()">
	        </div>
	        <div id="apDiv106">
	        	<img src="{{ asset('images/Fade/academica.png') }}" width="604" height="48" id="academica" style="cursor:pointer;"  onclick="Academica()">
	        </div>
	        <div id="apDiv107">
	        	<img id="calidad" style="cursor:pointer;" width="604" height="48" onclick="Calidad()" src="{{ asset('images/Fade/calidad.png') }}">
	        </div>
	        <div id="apDiv109">
	        	<img id="docencia" style="cursor:pointer;" onclick="Docencia()" src="{{ asset('images/Fade/docencia.png') }}" width="196" height="63">
	        </div>
	        <div id="apDiv110">
	        	<img id="investigacion" style="cursor:pointer;" onclick="Investigacion()" src="{{ asset('images/Fade/investigacion.png') }}" width="196" height="63">
	        </div>
	        <div id="apDiv111">
	        	<img id="asistencia" style="cursor:pointer;" width="604" height="48" src="{{ asset('images/Fade/asistencia.png') }}">
	        </div>
	        <div id="apDiv112">
	        	<img id="academico" style="cursor:pointer;" onclick="Academico()"  width="604" height="48" src="{{ asset('images/Fade/academico.png') }}">
	        </div>
	        <div id="apDiv113">
	        	<img id="financiero" style="cursor:pointer;" onclick="Financiero()" width="604" height="48" src="{{ asset('images/Fade/financiero.png') }}">
	        </div>
	        <div id="apDiv114">
	        	<img id="mantenimiento" style="cursor:pointer;"  width="604" height="48" src="{{ asset('images/Fade/mantenimiento.png') }}">
	        </div>
	        <div id="apDiv115">
	        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/Fade/transporte.png') }}">
	        </div>
	        <div id="apDiv69">
	        	<img src="{{ asset('images/Fade/informatico.png') }}" width="604" height="48" id="informatico" onclick="Informatico()" style="cursor:pointer;">
	        </div>


	       <!-- Responsables de los procesos de vinculacion azul(entrada) rojo(salida) -->

	       <div id="apDiv176">
	       		<img src="{{ asset('images/Responsables/externos.png') }}">
	       	</div>
	       <div id="apDiv187">
	       		<img onmouseover="ImgAzulNoId()" onmouseout="BackAzulNoId()" src="{{ asset('images/Responsables/NoIdEstu.png') }}">
	       	</div>
	       <div id="apDiv192">
	       		<img onmouseover="ImgAzulCoordinador()" onmouseout="BackAzulCoordinador()" src="{{ asset('images/Responsables/coordinador.png') }}">
	       	</div>
	       <div id="apDiv180">
	       		<img src="{{ asset('images/Responsables/externos.png') }}">
	       	</div>
	       <div id="apDiv193">
	       		<img onmouseover="ImgRojoCoordinador()" onmouseout="BackRojoCoordinador()" src="{{ asset('images/Responsables/coordinador.png') }}">
	       	</div>
                            
          <!-- Footer --> 
            
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br> </br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br>
            
        <center>
        <p style="font-size:10px;color:#03F">&nbsp;</p>

           <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                    <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
            </p>

            </center> 

     </div>  

@stop     