@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesCalidadF.css'); }}
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
        		<img src="{{ asset('images/fade/calidad/contenedor.png') }}">
        	</div>

        	<!-- procesos de la Gestion de calidad de la facultad -->

 		<div id="apDiv163">
 			<img id="afeg061" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-01.png') }}">
 		</div>
        <div id="apDiv164">
        	<img id="afeg062" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-02.png') }}">
        </div>
        <div id="apDiv165">
        	<img id="afeg063" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-03.png') }}">
        </div>
        <div id="apDiv166">
        	<img id="afeg064" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-04.png') }}">
        </div>
        <div id="apDiv167">
        	<img id="afeg065" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-05.png') }}">
        </div>
        <div id="apDiv168">
        	<img id="afeg066" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-06.png') }}">
        </div>
        <div id="apDiv169">
        	<img id="afeg067" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-07.png') }}">
        </div>
        <div id="apDiv170">
        	<img id="afeg068" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-08.png') }}">
        </div>
        <div id="apDiv171">
        	<img id="afeg069" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-09.png') }}">
        </div>
        <div id="apDiv172">
        	<img id="afeg0610" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-10.png') }}">
        </div>
        <div id="apDiv173">
        	<img id="afeg0611" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-11.png') }}">
        </div>
        <div id="apDiv174">
        	<img id="afeg0612" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-12.png') }}">
        </div>
        <div id="apDiv175">
        	<img id="afeg0613" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-13.png') }}">
        </div>
        <div id="apDiv176">
        	<img id="afeg0614" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-14.png') }}">
        </div>
        <div id="apDiv177">
        	<img id="afeg0615" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-15.png') }}">
        </div>
        <div id="apDiv178">
        	<img id="afeg0616" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-16.png') }}">
        </div>
        <div id="apDiv179">
        	<img id="afeg0617" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-17.png') }}">
        </div>
        <div id="apDiv180">
        	<img id="afeg0618" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-18.png') }}">
        </div>
        <div id="apDiv181">
        	<img id="afeg0619" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-19.png') }}">
        </div>
  	    <div id="apDiv192">
  	    	<img id="afeg0620" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-20.png') }}">
  	    </div>
  	    <div id="apDiv193">
  	    	<img id="afeg0621" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-21.png') }}">
  	    </div>
        <div id="apDiv182">
        	<img id="afeg0622" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-22.png') }}">
        </div>
        <div id="apDiv183">
        	<img id="afeg0623" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-23.png') }}">
        </div>
        <div id="apDiv184">
        	<img id="afeg0624" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-24.png') }}">
        </div>
        <div id="apDiv185">
        	<img id="afeg0625" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-25.png') }}">
        </div>
        <div id="apDiv186">
        	<img id="afeg0626" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-26.png') }}">
        </div>
        <div id="apDiv187">
        	<img id="afeg0627" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-27.png') }}">
        </div>
        <div id="apDiv188">
        	<img id="afeg0628" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-28.png') }}">
        </div>
        <div id="apDiv189">
        	<img id="afeg0629" style="cursor:pointer" src="{{ asset('images/fade/calidad/afeg06-29.png') }}">
        </div>

        <!-- códigos de los procesos en la Gestion de  -->

    	<div id="apDiv194">
    		<img src="{{ asset('images/fade/calidad/cod_afeg06-01.png') }}" width="59" height="19" id="afeg06_01">
    	</div>
        <div id="apDiv195">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-02.png') }}" width="59" height="19" id="afeg06_02">
        </div>
        <div id="apDiv196">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-03.png') }}" width="59" height="19" id="afeg06_03">
        </div>
        <div id="apDiv197">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-04.png') }}" width="59" height="19" id="afeg06_04">
        </div>
        <div id="apDiv198">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-05.png') }}" width="59" height="19" id="afeg06_05">
        </div>
        <div id="apDiv199">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-06.png') }}" width="59" height="19" id="afeg06_06">
        </div>
        <div id="apDiv200">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-07.png') }}" width="59" height="19" id="afeg06_07">
        </div>
        <div id="apDiv201">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-08.png') }}" width="59" height="19" id="afeg06_08">
        </div>
        <div id="apDiv202">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-09.png') }}" width="59" height="19" id="afeg06_09">
        </div>
        <div id="apDiv203">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-10.png') }}" width="59" height="19" id="afeg06_10">
        </div>
        <div id="apDiv204">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-11.png') }}" width="59" height="19" id="afeg06_11">
        </div>
        <div id="apDiv205">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-12.png') }}" width="59" height="19" id="afeg06_12">
        </div>
        <div id="apDiv206">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-13.png') }}" width="59" height="19" id="afeg06_13">
        </div>
        <div id="apDiv207">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-14.png') }}" width="59" height="19" id="afeg06_14">
        </div>
        <div id="apDiv208">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-15.png') }}" width="59" height="19" id="afeg06_15">
        </div>
        <div id="apDiv209">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-16.png') }}" width="59" height="19" id="afeg06_16">
        </div>
        <div id="apDiv210">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-17.png') }}" width="59" height="19" id="afeg06_17">
        </div>
        <div id="apDiv211">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-18.png') }}" width="59" height="19" id="afeg06_18">
        </div>
        <div id="apDiv212">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-19.png') }}" width="59" height="19" id="afeg06_19">
        </div>
        <div id="apDiv213">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-20.png') }}" width="59" height="19" id="afeg06_20">
        </div>
        <div id="apDiv214">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-21.png') }}" width="59" height="19" id="afeg06_21">
        </div>
        <div id="apDiv215">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-22.png') }}" width="59" height="19" id="afeg06_22">
        </div>
        <div id="apDiv216">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-23.png') }}" width="59" height="19" id="afeg06_23">
        </div>
        <div id="apDiv217">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-24.png') }}" width="59" height="19" id="afeg06_24">
        </div>
        <div id="apDiv218">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-25.png') }}" width="59" height="19" id="afeg06_25">
        </div>
        <div id="apDiv219">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-26.png') }}" width="59" height="19" id="afeg06_26">
        </div>
        <div id="apDiv220">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-27.png') }}" width="59" height="19" id="afeg06_27">
        </div>
        <div id="apDiv221">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-28.png') }}" width="59" height="19" id="afeg06_28">
        </div>
        <div id="apDiv234">
        	<img src="{{ asset('images/fade/calidad/cod_afeg06-29.png') }}" width="59" height="19" id="afeg06_29">
        </div>

        <!-- macroprocesos de la fade -->

        <div id="apDiv96">
        	<img src="{{ asset('images/fade/administrativa.png') }}" width="604" height="48" id="administrativa" style="cursor:pointer;" onclick="Administrativa()">
        </div>
        <div id="apDiv97">
        	<img id="academica" style="cursor:pointer;" onclick="Academica()" src="{{ asset('images/fade/academica.png') }}" width="604" height="48">
        </div>
        <div id="apDiv99">
        	<img id="docencia" style="cursor:pointer;" onclick="Docencia()" width="196" height="63" src="{{ asset('images/fade/docencia.png') }}">
        </div>
        <div id="apDiv100">
        	<img id="investigacion" style="cursor:pointer;" onclick="Investigacion()" width="196" height="63" src="{{ asset('images/fade/investigacion.png') }}">
        </div>
        <div id="apDiv101">
        	<img id="vinculacion" style="cursor:pointer;" onclick="Vinculacion()" width="196" height="63" src="{{ asset('images/fade/vinculacion.png') }}">
        </div>
        <div id="apDiv102">
        	<img id="asistencia" style="cursor:pointer;" onclick="Asistencia()" src="{{ asset('images/fade/asistencia.png') }}" width="604" height="48">
        </div>
        <div id="apDiv112">
        	<img id="academico" style="cursor:pointer;" onclick="Academico()"  width="604" height="48" src="{{ asset('images/fade/academico.png') }}">
        </div>
    	<div id="apDiv103">
    		<img id="financiero" style="cursor:pointer;" onclick="Financiero()" src="{{ asset('images/fade/financiero.png') }}" width="604" height="48">
    	</div>
    	<div id="apDiv114">
    		<img id="mantenimiento"  width="604" height="48"  style="cursor:pointer;" onclick="Mantenimiento()" src="{{ asset('images/fade/mantenimiento.png') }}">
    	</div>
        <div id="apDiv115">
        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/fade/transporte.png') }}">
        </div>
        <div id="apDiv236">
        	<img id="informatico" style="cursor:pointer;" onclick="Informatico()" width="604" height="48" src="{{ asset('images/fade/informatico.png') }}">
        </div>


        <!-- Responsables procesos azul(entradas) rojo(salidas) -->

        <div id="apDiv223">
        	<img src="{{ asset('images/Responsables/externos_azul.png') }}">
        </div>
        <div id="apDiv224">
        	<img onmouseover="ImgAzulNorma()" onmouseout="BackAzulNorma()" src="{{ asset('images/Responsables/normas_iso.png') }}">
        </div>
        <div id="apDiv225">
        	<img onmouseover="ImgAzulESPOCH()" onmouseout="BackAzulESPOCH()" src="{{ asset('images/Responsables/espoch_escuelas.png') }}">
        </div>
        <div id="apDiv226">
        	<img src="{{ asset('images/Responsables/proceso_administrativa.png') }}">
        </div>
        <div id="apDiv227">
        	<img src="{{ asset('images/Responsables/externo.png') }}">
        </div>
        <div id="apDiv228">
        	<img src="{{ asset('images/Responsables/estatutoPizq.png') }}">
        </div>
        <div id="apDiv229">
        	<img src="{{ asset('images/Responsables/externos_dere.png') }}">
        </div>
        <div id="apDiv230">
        	<img src="{{ asset('images/Responsables/decano_director.png') }}">
        </div>
        <div id="apDiv231">
        	<img src="{{ asset('images/Responsables/web_sgc.png') }}">
        </div>
        <div id="apDiv232">
        	<img src="{{ asset('images/Responsables/web_fade.png') }}">
        </div>
        <div id="apDiv233">
        	<img src="{{ asset('images/Responsables/fade.png') }}">
        </div>
    
    </div>    

@stop