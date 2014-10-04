@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesTransporteF.css'); }}
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
       	 		<img src="{{ asset('images/Fade/transporte/contenedor.png') }}">
       	 	</div>

       	 	<!-- procesos de la gestion de transporte de la facultad -->

       	 	<div id="apDiv192">
       	 		<img id="afea111" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-01.png') }}">
       	 	</div>
	        <div id="apDiv193">
	        	<img id="afea112" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-02.png') }}">
	        </div>
	        <div id="apDiv194">
	        	<img id="afea113" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-03.png') }}">
	        </div>
	        <div id="apDiv195">
	        	<img id="afea114" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-04.png') }}">
	        </div>
	        <div id="apDiv196">
	        	<img id="afea115" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-05.png') }}">
	        </div>
	        <div id="apDiv197">
	       		<img id="afea116" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-06.png') }}">
	       	</div>
	        <div id="apDiv198">
	        	<img id="afea117" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-07.png') }}">
	        </div>
	        <div id="apDiv199">
	        	<img id="afea118" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-08.png') }}">
	        </div>
	        <div id="apDiv200">
	        	<img id="afea119" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-09.png') }}">
	        </div>
	        <div id="apDiv201">
	        	<img id="afea1110" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-10.png') }}">
	        </div>
	        <div id="apDiv202">
	        	<img id="afea1111" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-11.png') }}">
	        </div>
	        <div id="apDiv203">
	        	<img id="afea1112" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-12.png') }}">
	        </div>
	        <div id="apDiv204">
	        	<img id="afea1113" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-13.png') }}">
	        </div>
	        <div id="apDiv205">
	        	<img id="afea1114" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-14.png') }}">
	        </div>
	        <div id="apDiv206">
	        	<img id="afea1115" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-15.png') }}">
	        </div>
	        <div id="apDiv207">
	        	<img id="afea1116" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-16.png') }}">
	        </div>
	        <div id="apDiv208">
	        	<img id="afea1117" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-17.png') }}">
	        </div>
	        <div id="apDiv209">
	        	<img id="afea1118" style="cursor:pointer" src="{{ asset('images/Fade/transporte/afea11-18.png') }}">
	        </div>
	  
	        <!-- codigos de los procesos  -->	

	        <div id="apDiv211">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-01.png') }}" width="59" height="12" id="afea11_01">
	        </div>
	        <div id="apDiv212">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-02.png') }}" width="59" height="12" id="afea11_02">
	        </div>
	        <div id="apDiv213">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-03.png') }}" width="59" height="12" id="afea11_03">
	        </div>
	        <div id="apDiv214">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-04.png') }}" width="59" height="12" id="afea11_04">
	        </div>
	        <div id="apDiv215">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-05.png') }}" width="59" height="12" id="afea11_05">
	        </div>
	        <div id="apDiv216">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-06.png') }}" width="59" height="12" id="afea11_06">
	        </div>
	        <div id="apDiv217">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-07.png') }}" width="59" height="12" id="afea11_07">
	        </div>
	        <div id="apDiv218">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-08.png') }}" width="59" height="12" id="afea11_08">
	        </div>
	        <div id="apDiv219">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-09.png') }}" width="59" height="12" id="afea11_09">
	        </div>
	        <div id="apDiv220">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-10.png') }}" width="59" height="12" id="afea11_10">
	        </div>
	        <div id="apDiv221">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-11.png') }}" width="59" height="12" id="afea11_11">
	        </div>
	        <div id="apDiv222">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-12.png') }}" width="59" height="12" id="afea11_12">
	        </div>
	        <div id="apDiv223">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-13.png') }}" width="59" height="12" id="afea11_13">
	        </div>
	        <div id="apDiv224">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-14.png') }}" width="59" height="12" id="afea11_14">
	        </div>
	        <div id="apDiv225">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-15.png') }}" width="59" height="12" id="afea11_15">
	        </div>
	        <div id="apDiv226">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-16.png') }}" width="59" height="12" id="afea11_16">
	        </div>
	        <div id="apDiv227">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-17.png') }}" width="59" height="12" id="afea11_17">
	        </div>
	        <div id="apDiv228">
	        	<img src="{{ asset('images/Fade/transporte/cod_afea11-18.png') }}" width="59" height="12" id="afea11_18">
	        </div>

	        <!-- macroprocesos de la facultad -->

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
	        <div id="apDiv101">
	        	<img id="vinculacion" style="cursor:pointer;" onclick="Vinculacion()" width="196" height="63" src="{{ asset('images/Fade/vinculacion.png') }}">
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
	        <div id="apDiv69">
	        	<img src="{{ asset('images/Fade/informatico.png') }}" width="604" height="48" id="informatico" onclick="Informatico()" style="cursor:pointer;">
	        </div>



	        <!-- responsables procesos azul(entrada) rojo(salidas) -->

	        <div id="apDiv229">
	        	<img src="{{ asset('images/Responsables/internos_azul.png') }}">
	        </div>
	        <div id="apDiv230">
	        	<img src="{{ asset('images/Responsables/estatuto.png') }}">
	        </div>
	        <div id="apDiv231">
	        	<img src="{{ asset('images/Responsables/decanato.png') }}">
	        </div>
	        <div id="apDiv232">
	        	<img src="{{ asset('images/Responsables/vicedecanato.png') }}">
	        </div>
	        <div id="apDiv233">
	        	<img src="{{ asset('images/Responsables/espoch.png') }}">
	        </div>
	        <div id="apDiv234">
	        	<img src="{{ asset('images/Responsables/internos_azul_dere.png') }}">
	        </div>
	        <div id="apDiv235">
	        	<img src="{{ asset('images/Responsables/fade.png') }}">
	        </div>
	        <div id="apDiv236">
	        	<img src="{{ asset('images/Responsables/decanato.png') }}">
	        </div>
	        <div id="apDiv237">
	        	<img src="{{ asset('images/Responsables/vicedecanato.png') }}">
	        </div>
	        <div id="apDiv238">
	        	<img src="{{ asset('images/Responsables/espoch.png') }}">
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