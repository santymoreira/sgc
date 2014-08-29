@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesAcademicaF.css'); }}
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
        	<img src="{{ asset('images/fade/academica/contenedor.png') }}">
        </div>

        <!-- Procesos de la Gestion Academica  -->

        <div id="apDiv163">
        	<img id="afeg051" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-01.png') }}">
        </div>
        <div id="apDiv164">
        	<img id="afeg052" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-02.png') }}">
        </div>
        <div id="apDiv165">
        	<img id="afeg053" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-03.png') }}">
        </div>
        <div id="apDiv166">
        	<img id="afeg054" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-04.png') }}">
        </div>
        <div id="apDiv167">
        	<img id="afeg055" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-05.png') }}">
        </div>
        <div id="apDiv168">
        	<img id="afeg056" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-06.png') }}">
        </div>
        <div id="apDiv169">
        	<img id="afeg057" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-07.png') }}">
        </div>
        <div id="apDiv170">
        	<img id="afeg058" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-08.png') }}">
        </div>
        <div id="apDiv171">
        	<img id="afeg059" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-09.png') }}">
        </div>
        <div id="apDiv172">
       		<img id="afeg0510" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-10.png') }}">
       	</div>
        <div id="apDiv173">
        	<img id="afeg0511" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-11.png') }}">
        </div>
        <div id="apDiv174">
        	<img id="afeg0512" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-12.png') }}">
        </div>
        <div id="apDiv175">
        	<img id="afeg0513" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-13.png') }}">
        </div>
        <div id="apDiv176">
        	<img id="afeg0514" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-14.png') }}">
        </div>
        <div id="apDiv177">
        	<img id="afeg0515" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-15.png') }}">
        </div>
        <div id="apDiv179">
        	<img id="afeg0516" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-16.png') }}">
        </div>
        <div id="apDiv180">
        	<img id="afeg0517" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-17.png') }}">
        </div>
        <div id="apDiv181">
        	<img id="afeg0518" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-18.png') }}">
        </div>
        <div id="apDiv182">
        	<img id="afeg0519" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-19.png') }}">
        </div>
        <div id="apDiv183">
        	<img id="afeg0520" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-20.png') }}">
        </div>
        <div id="apDiv184">
        	<img id="afeg0521" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-21.png') }}">
        </div>
        <div id="apDiv185">
        	<img id="afeg0522" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-22.png') }}">
        </div>
        <div id="apDiv186">
        	<img id="afeg0523" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-23.png') }}">
        </div>
        <div id="apDiv187">
        	<img id="afeg0524" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-24.png') }}">
        </div>
        <div id="apDiv188">
        	<img id="afeg0525" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-25.png') }}">
        </div>
        <div id="apDiv189">
       		<img id="afeg0526" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-26.png') }}">
       	</div>
        <div id="apDiv190">
        	<img id="afeg0527" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-27.png') }}">
        </div>
        <div id="apDiv191">
        	<img id="afeg0528" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-28.png') }}">
        </div>
        <div id="apDiv192">
       		<img id="afeg0529" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-29.png') }}">
       	</div>
        <div id="apDiv193">
        	<img id="afeg0530" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-30.png') }}">
        </div>
        <div id="apDiv194">
        	<img id="afeg0531" style="cursor:pointer" src="{{ asset('images/fade/academica/afeg05-31.png') }}">
        </div>
         

        <!-- Códigos de los procesos de la Gestion Academica -->

   		<div id="apDiv195">
   			<img src="{{ asset('images/fade/academica/cod_afeg05-01.png') }}" width="64" height="19" id="afeg05_01">
   		</div>
        <div id="apDiv196">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-02.png') }}" width="64" height="19" id="afeg05_02">
        </div>
        <div id="apDiv197">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-03.png') }}" width="64" height="19" id="afeg05_03">
        </div>
        <div id="apDiv198">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-04.png') }}" width="64" height="19" id="afeg05_04">
        </div>
        <div id="apDiv199">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-05.png') }}" width="64" height="19" id="afeg05_05">
        </div>
        <div id="apDiv200">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-06.png') }}" width="64" height="19" id="afeg05_06">
        </div>
        <div id="apDiv201">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-07.png') }}" width="64" height="19" id="afeg05_07">
        </div>
        <div id="apDiv202">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-08.png') }}" width="64" height="19" id="afeg05_08">
        </div>
        <div id="apDiv203">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-09.png') }}" width="64" height="19" id="afeg05_09">
        </div>
        <div id="apDiv204">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-10.png') }}" width="64" height="19" id="afeg05_10">
        </div>
        <div id="apDiv205">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-11.png') }}" width="64" height="19" id="afeg05_11">
        </div>
        <div id="apDiv206">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-12.png') }}" width="64" height="19" id="afeg05_12">
        </div>
        <div id="apDiv207">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-13.png') }}" width="64" height="19" id="afeg05_13">
        </div>
        <div id="apDiv208">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-14.png') }}" width="64" height="19" id="afeg05_14">
        </div>
        <div id="apDiv209">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-15.png') }}" width="64" height="19" id="afeg05_15">
        </div>
        <div id="apDiv210">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-16.png') }}" width="64" height="19" id="afeg05_16">
        </div>
        <div id="apDiv211">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-17.png') }}" width="64" height="19" id="afeg05_17">
        </div>
        <div id="apDiv212">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-18.png') }}" width="64" height="19" id="afeg05_18">
        </div>
        <div id="apDiv213">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-19.png') }}" width="64" height="19" id="afeg05_19">
        </div>
        <div id="apDiv214">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-20.png') }}" width="64" height="19" id="afeg05_20">
        </div>
        <div id="apDiv215">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-21.png') }}" width="64" height="19" id="afeg05_21">
        </div>
        <div id="apDiv216">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-22.png') }}" width="64" height="19" id="afeg05_22">
        </div>
        <div id="apDiv217">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-23.png') }}" width="64" height="19" id="afeg05_23">
        </div>
        <div id="apDiv218">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-24.png') }}" width="64" height="19" id="afeg05_24">
        </div>
        <div id="apDiv219">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-25.png') }}" width="64" height="19" id="afeg05_25">
        </div>
        <div id="apDiv220">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-26.png') }}" width="64" height="19" id="afeg05_26">
        </div>
        <div id="apDiv221">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-27.png') }}" width="64" height="19" id="afeg05_27">
        </div>
        <div id="apDiv222">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-28.png') }}" width="64" height="19" id="afeg05_28">
        </div>
        <div id="apDiv223">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-29.png') }}" width="64" height="19" id="afeg05_29">
        </div>
        <div id="apDiv224">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-30.png') }}" width="64" height="19" id="afeg05_30">
        </div>
        <div id="apDiv225">
        	<img src="{{ asset('images/fade/academica/cod_afeg05-31.png') }}" width="64" height="19" id="afeg05_31">
        </div>

        <!-- Macroprocesos de la facultad -->

 		<div id="apDiv59">
 			<img id="administrativa" style="cursor:pointer" onclick="Administrativa()" src="{{ asset('images/fade/administrativa.png') }}" width="604" height="48">
 		</div>
        <div id="apDiv60">
        	<img id="calidad" style="cursor:pointer" onclick="Calidad()" src="{{ asset('images/fade/calidad.png') }}" width="604" height="48">
        </div>
        <div id="apDiv61">
        	<img id="docencia" style="cursor:pointer" onclick="Docencia()" src="{{ asset('images/fade/docencia.png') }}" width="196" height="63">
        </div>
        <div id="apDiv62">
        	<img id="investigacion" style="cursor:pointer" onclick="Investigacion()" src="{{ asset('images/fade/investigacion.png') }}" width="196" height="63">
        </div>
        <div id="apDiv63">
        	<img id="vinculacion" style="cursor:pointer" onclick="Vinculacion()" src="{{ asset('images/fade/vinculacion.png') }}" width="196" height="63">
        </div>
        <div id="apDiv64">
        	<img id="asistencia" style="cursor:pointer;" onclick="Asistencia()" src="{{ asset('images/fade/asistencia.png') }}" width="604" height="48">
        </div>
        <div id="apDiv65">
        	<img id="academico" onclick="Academico()" style="cursor:pointer;" src="{{ asset('images/fade/academico.png') }}" width="604" height="48">
        </div>
        <div id="apDiv66">
        	<img id="financiero" style="cursor:pointer;" onclick="Financiero()" src="{{ asset('images/fade/financiero.png') }}" width="604" height="48">
        </div>
        <div id="apDiv67">
        	<img id="mantenimiento" style="cursor:pointer;" onclick="Mantenimiento()"  width="604" height="48" src="{{ asset('images/fade/mantenimiento.png') }}">
        </div>
        <div id="apDiv68">
        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" src="{{ asset('images/fade/transporte.png') }}" width="604" height="48" >
        </div>
        <div id="apDiv69">
        	<img src="{{ asset('images/fade/informatico.png') }}" width="604" height="48" id="informatico" onclick="Informatico()" style="cursor:pointer;">
        </div>

    	<!-- responsables procesos azul(entrada) rojo(salida) -->    

   		<div id="apDiv226">
   			<img src="{{ asset('images/Responsables/externos_azul.png') }}">
   		</div>
        <div id="apDiv227">
        	<img onmouseover="ImgAzulReglamento()" onmouseout="BackAzulReglamento()" src="{{ asset('images/Responsables/reglamento.png') }}">
        </div>
        <div id="apDiv228">
        	<img onmouseover="ImgAzulEscuelas()" onmouseout="BackAzulEscuelas()" src="{{ asset('images/Responsables/escuelas.png') }}">
        </div>
        <div id="apDiv229">
        	<img onmouseover="ImgAzulSniese()" onmouseout="BackAzulSniese()" src="{{ asset('images/Responsables/espoch_sniese.png') }}">
        </div>
        <div id="apDiv230">
        	<img src="{{ asset('images/Responsables/externo.png') }}">
        </div>
        <div id="apDiv231">
        	<img onmouseover="ImgAzulEstatuto()" onmouseout="BackAzulEstatuto()" src="{{ asset('images/Responsables/estatutoPizq.png') }}">
        </div>
        <div id="apDiv232">
        	<img src="{{ asset('images/Responsables/externos_dere.png') }}">
        </div>
        <div id="apDiv233">
        	<img onmouseover="ImgRojoDecanato()" onmouseout="BackRojoDecanato()" src="{{ asset('images/Responsables/decanato.png') }}">
        </div>
        <div id="apDiv234">
        	<img onmouseover="ImgRojoRector()" onmouseout="BackRojoRector()" src="{{ asset('images/Responsables/rector.png') }}">
        </div>
        <div id="apDiv235">
        	<img onmouseover="ImgRojoFADE()" onmouseout="BackRojoFADE()" src="{{ asset('images/Responsables/fade.png') }}">
        </div>
        <div id="apDiv236">
        	<img onmouseover="ImgRojoVinculacion()" onmouseout="BackRojoVinculacion()" src="{{ asset('images/Responsables/proceso_vinculacion.png') }}">
        </div>
        <div id="apDiv237">
        	<img onmouseover="ImgRojoDocencia" onmouseout="BackRojoDocencia()" src="{{ asset('images/Responsables/proceso_docencia.png') }}">
        </div>
        <div id="apDiv238">
        	<img onmouseover="ImgRojoInvestigacion()" onmouseout="BackRojoInvestigacion()" src="{{ asset('images/Responsables/proceso_investigacion.png') }}">
        </div>
        <div id="apDiv239">
        	<img onmouseover="ImgRojoSociedad()" onmouseout="BackRojoSociedad()" src="{{ asset('images/Responsables/sociedad.png') }}">
        </div>
        <div id="apDiv240">
        	<img onmouseover="ImgRojoESPOCH()" onmouseout="BackRojoESPOCH()" src="{{ asset('images/Responsables/espoch.png') }}">
        </div>
        <div id="apDiv241">
        	<img onmouseover="ImgRojoVAcademico()" onmouseout="BackRojoVAcademico()" src="{{ asset('images/Responsables/vicerrector_academico.png') }}">
        </div>
        <div id="apDiv242">
        	<img onmouseover="ImgRojoVAdministrativo()" onmouseout="BackRojoVAdministrativo()" src="{{ asset('images/Responsables/vicerrector_admin.png') }}">
        </div>
        <div id="apDiv243">
        	<img onmouseover="ImgRojoApAcademico()" onmouseout="BackRojoApAcademico()" src="{{ asset('images/Responsables/proceso_apoyo.png') }}">
        </div>
        <div id="apDiv244">
        	<img onmouseover="ImgRojoSniese()" onmouseout="BackRojoSniese()" src="{{ asset('images/Responsables/espoch_sniese.png') }}">
        </div>



                                  
            <!-- Footer -->         
        <center>
           <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
        </center>    


    </div>    

@stop