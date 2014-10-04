@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesDocenciaF.css'); }}
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
        		<img src="{{ asset('images/Fade/docencia/contenedor.png') }}">
            </div>	

            <!-- procesos de la docencia en la fade -->

	   	   <div id="apDiv163">
	   	   		<img src="{{ asset('images/Fade/docencia/afec01-01.png') }}" width="84" height="81" id="afeg011" style="cursor:pointer">
	   	   	</div>
	       <div id="apDiv164">
	       		<img src="{{ asset('images/Fade/docencia/afec01-02.png') }}" width="84" height="81" id="afeg012" style="cursor:pointer">
	       	</div>
	       <div id="apDiv165">
	       		<img src="{{ asset('images/Fade/docencia/afec01-03.png') }}" width="84" height="81" id="afeg013" style="cursor:pointer">
	       	</div>
	       <div id="apDiv166">
	       		<img src="{{ asset('images/Fade/docencia/afec01-04.png') }}" width="84" height="81" id="afeg014" style="cursor:pointer">
	       	</div>
	       <div id="apDiv167">
	       		<img src="{{ asset('images/Fade/docencia/afec01-05.png') }}" width="84" height="81" id="afeg015" style="cursor:pointer">
	       	</div>
	       <div id="apDiv168">
	       		<img src="{{ asset('images/Fade/docencia/afec01-06.png') }}" width="84" height="81" id="afeg016" style="cursor:pointer">
	      </div>
	            
	     	<!-- codigos procesos de la doencia en la fade -->

	       <div id="apDiv169">
	       		<img src="{{ asset('images/Fade/docencia/cod_afec01-01.png') }}" width="61" height="19" id="afeg01_1">
	       	</div>
	       <div id="apDiv170">
	       		<img src="{{ asset('images/Fade/docencia/cod_afec01-02.png') }}"  width="61" height="19" id="afeg01_2">
	       	</div>
	       <div id="apDiv171">
	       		<img src="{{ asset('images/Fade/docencia/cod_afec01-03.png') }}"  width="61" height="19" id="afeg01_3">
	       </div>
	       <div id="apDiv172">
	       		<img src="{{ asset('images/Fade/docencia/cod_afec01-04.png') }}" width="61" height="19" id="afeg01_4">
	       	</div>
	       <div id="apDiv173">
	       		<img src="{{ asset('images/Fade/docencia/cod_afec01-05.png') }}" width="61" height="19" id="afeg01_5">
	       	</div>
	       <div id="apDiv174">
	       		<img src="{{ asset('images/Fade/docencia/cod_afec01-06.png') }}"  width="61" height="19" id="afeg01_6">
	       	</div> 	

	       	<!-- macroprocesos de la facutlad -->

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
	        	<img id="investigacion" style="cursor:pointer;" onclick="Investigacion()" src="{{ asset('images/Fade/investigacion.png') }}" width="196" height="63">
	        </div>
	        <div id="apDiv110">
	        	<img id="vinculacion" style="cursor:pointer;" onclick="Vinculacion()" src="{{ asset('images/Fade/vinculacion.png') }}" width="196" height="63">
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
	        	<img id="mantenimiento" style="cursor:pointer;" width="604" height="48" src="{{ asset('images/Fade/mantenimiento.png') }}">
	        </div>
	        <div id="apDiv115">
	        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/Fade/transporte.png') }}">
	        </div>
	        <div id="apDiv69">
	        	<img src="{{ asset('images/Fade/financiero.png') }}" width="604" height="48" id="informatico" onclick="Informatico()" style="cursor:pointer;">
	        </div>

	        <!-- responsables de procesos azul(entrada) rojo(salida) -->


	       <div id="apDiv175">
	       		<img src="{{ asset('images/Responsables/internos.png') }}">
	       	</div>
	       <div id="apDiv176">
	       		<img src="{{ asset('images/Responsables/externos.png') }}">
	       	</div>
	       <div id="apDiv177">
	       		<img onmouseover="ImgAzulEstatuto()" onmouseout="BackAzulEstatuto()" src="{{ asset('images/Responsables/estatutoPizq.png') }}">
	       	</div>
	       <div id="apDiv178">
	       		<img src="{{ asset('images/Responsables/internos_dere.png') }}">
	       	</div>
	       <div id="apDiv179">
	       		<img onmouseover="ImgRojoNoId()" onmouseout="BackRojoNoId()" src="{{ asset('images/Responsables/procesoNoId_rojo.png') }}">
	       	</div>
	       <div id="apDiv180">
	       		<img src="{{ asset('images/Responsables/externos.png') }}">
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