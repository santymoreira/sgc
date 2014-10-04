@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesFinancieroF.css'); }}
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
        	<img src="{{ asset('images/Fade/financiero/contenedor.png') }}">
        </div>

        <div id="apDiv212">
        	<img id="afeag091" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-01.png') }}">
        </div>
        <div id="apDiv215">
        	<img id="afeag092" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-02.png') }}">
        </div>
        <div id="apDiv216">
        	<img id="afeag093" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-03.png') }}">
        </div>
        <div id="apDiv217">
        	<img id="afeag094" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-04.png') }}">
        </div>
    	<div id="apDiv218">
    		<img id="afeag095" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-05.png') }}">
    	</div>
        <div id="apDiv219">
        	<img id="afeag096" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-06.png') }}">
        </div>
        <div id="apDiv220">
        	<img id="afeag097" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-07.png') }}">
        </div>
        <div id="apDiv221">
        	<img id="afeag098" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-08.png') }}">
        </div>
        <div id="apDiv222">
        	<img id="afeag099" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-09.png') }}">
        </div>
        <div id="apDiv223">
        	<img id="afeag0910" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-10.png') }}">
        </div>
        <div id="apDiv224">
        	<img id="afeag0911" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-11.png') }}">
        </div>
        <div id="apDiv225">
        	<img id="afeag0912" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-12.png') }}">
        </div>
        <div id="apDiv226">
        	<img id="afeag0913" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-13.png') }}">
        </div>
        <div id="apDiv227">
        	<img id="afeag0914" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-14.png') }}">
        </div>
        <div id="apDiv228">
        	<img id="afeag0915" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-15.png') }}">
        </div>
        <div id="apDiv229">
        	<img id="afeag0916" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-16.png') }}">
        </div>
        <div id="apDiv230">
        	<img id="afeag0917" style="cursor:pointer;" src="{{ asset('images/Fade/financiero/afea09-17.png') }}">
        </div>

        <!-- códigos de los procesos de lo financiero -->

        <div id="apDiv231">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-01.png') }}" width="65" height="12" id="afeag09_1">
        </div>
        <div id="apDiv232">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-02.png') }}" width="65" height="12" id="afeag09_2">
        </div>
        <div id="apDiv233">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-03.png') }}" width="65" height="12" id="afeag09_3">
        </div>
        <div id="apDiv234">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-04.png') }}" width="65" height="12" id="afeag09_4">
        </div>
        <div id="apDiv235">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-05.png') }}" width="65" height="12" id="afeag09_5">
        </div>
        <div id="apDiv236">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-06.png') }}" width="65" height="12" id="afeag09_6">
        </div>
        <div id="apDiv237">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-07.png') }}" width="65" height="12" id="afeag09_7">
        </div>
        <div id="apDiv238">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-08.png') }}" width="65" height="12" id="afeag09_8">
        </div>
        <div id="apDiv239">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-09.png') }}" width="65" height="12" id="afeag09_9">
        </div>
        <div id="apDiv240">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-10.png') }}" width="65" height="12" id="afeag09_10">
        </div>
        <div id="apDiv241">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-11.png') }}" width="65" height="12" id="afeag09_11">
        </div>
        <div id="apDiv242">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-12.png') }}" width="65" height="12" id="afeag09_12">
        </div>
        <div id="apDiv243">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-13.png') }}" width="65" height="12" id="afeag09_13">
        </div>
        <div id="apDiv244">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-14.png') }}" width="65" height="12" id="afeag09_14">
        </div>
        <div id="apDiv245">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-15.png') }}" width="65" height="12" id="afeag09_15">
        </div>
        <div id="apDiv246">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-16.png') }}" width="65" height="12" id="afeag09_16">
        </div>
        <div id="apDiv247">
        	<img src="{{ asset('images/Fade/financiero/cod_afea09-17.png') }}" width="65" height="12" id="afeag09_17">
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
        <div id="apDiv108">
        	<img id="docencia" style="cursor:pointer;" onclick="Docencia()" src="{{ asset('images/Fade/docencia.png') }}" width="196" height="63">
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
        <div id="apDiv114">
        	<img id="mantenimiento" style="cursor:pointer;" width="604" height="48" src="{{ asset('images/Fade/mantenimiento.png') }}">
        </div>
        <div id="apDiv115">
        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/Fade/transporte.png') }}">
        </div>
        <div id="apDiv211">
        	<img id="informatico" style="cursor:pointer;" onclick="Informatico()" width="604" height="48" src="{{ asset('images/Fade/informatico.png') }}">
        </div>

        <!-- Responsables de los procesos azul(entrada) rojo(salida) -->

        <div id="apDiv248">
        	<img src="{{ asset('images/Responsables/internos_azul.png') }}">
        </div>
        <div id="apDiv249">
        	<img src="{{ asset('images/Responsables/reglamento.png') }}">
        </div>
        <div id="apDiv250">
        	<img src="{{ asset('images/Responsables/externo.png') }}">
        </div>
        <div id="apDiv251">
        	<img src="{{ asset('images/Responsables/estatutoPizq.png') }}">
        </div>
        <div id="apDiv253">
        	<img src="{{ asset('images/Responsables/internos_azul_dere.png') }}">
        </div>
        <div id="apDiv254">
        	<img src="{{ asset('images/Responsables/estatuto.png') }}">
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