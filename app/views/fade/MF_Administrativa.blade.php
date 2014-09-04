@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesAdministrativaF.css'); }}
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
        		<img src="{{ asset('images/Fade/administrativa/contenedor.png') }}">
        	</div>

        	<!-- Procesos de la Gestion Administrativa en la Facultad -->

        	 <div id="apDiv32">
        	 	<img id="afeg041" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-01.png') }}">
        	 </div>
	        <div id="apDiv33">
	        	<img id="afeg042" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-02.png') }}">
	        </div>
	        <div id="apDiv34">
	        	<img id="afeg043" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-03.png') }}">
	        </div>
	        <div id="apDiv35">
	        	<img id="afeg044" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-04.png') }}">
	        </div>
	        <div id="apDiv36">
	        	<img id="afeg045" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-05.png') }}">
	        </div>
	        <div id="apDiv37">
	        	<img id="afeg046" style="cursor:pointer"  src="{{ asset('images/Fade/administrativa/afeg04-06.png') }}">
	        </div>
	        <div id="apDiv38">
	        	<img id="afeg047" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-07.png') }}">
	        </div>
	        <div id="apDiv39">
	        	<img id="afeg048" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-08.png') }}">
	        </div>
	        <div id="apDiv40">
	        	<img id="afeg049" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-09.png') }}">
	        </div>
	        <div id="apDiv41">
	        	<img id="afeg0410" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-10.png') }}">
	        </div>
	        <div id="apDiv42">
	        	<img  id="afeg0411" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-11.png') }}">
	        </div>
	        <div id="apDiv43">
	        	<img id="afeg0412" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-12.png') }}">
	        </div>
	        <div id="apDiv44">
	        	<img id="afeg0413" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-13.png') }}">
	        </div>
	        <div id="apDiv45">
	        	<img id="afeg0414" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-14.png') }}">
	        </div>
	        <div id="apDiv46">
	        	<img id="afeg0415" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-15.jpg') }}">
	        </div>
	        <div id="apDiv47">
	        	<img id="afeg0416" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-16.png') }}">
	        </div>
	        <div id="apDiv49">
	        	<img id="afeg0417" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-17.png') }}">
	        </div>
	        <div id="apDiv50">
	        	<img id="afeg0418" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-18.png') }}">
	        </div>
	        <div id="apDiv51">
	        	<img id="afeg0419" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-19.png') }}">
	        </div>
	        <div id="apDiv52">
	        	<img id="afeg0420" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-20.png') }}">
	        </div>
	        <div id="apDiv53">
	        	<img id="afeg0421" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-21.png') }}">
	        </div>
	        <div id="apDiv54">
	        	<img id="afeg0422" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-22.png') }}">
	        </div>
	        <div id="apDiv55">
	        	<img id="afeg0423" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-23.png') }}">
	        </div>
	        <div id="apDiv56">
	        	<img id="afeg0424" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-24.png') }}">
	        </div>
	        <div id="apDiv57">
	        	<img id="afeg0425" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-25.png') }}">
	        </div>
	        <div id="apDiv58">
	        	<img id="afeg0426" style="cursor:pointer" src="{{ asset('images/Fade/administrativa/afeg04-26.png') }}">
	        </div>

	        <!-- Códigos de los procesos de la Gestion Administrativa -->

	        <div id="apDiv70">
	        	<img id="afeg04_1" src="{{ asset('images/Fade/administrativa/cod_afeg04-01.png') }}" width="61" height="13">
	        </div>
	        <div id="apDiv71">
	        	<img id="afeg04_2" src="{{ asset('images/Fade/administrativa/cod_afeg04-02.png') }}"width="61" height="13">
	        </div>
	        <div id="apDiv72">
	        	<img id="afeg04_3" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-03.png') }}">
	        </div>
	        <div id="apDiv73">
	        	<img id="afeg04_4" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-04.png') }}">
	        </div>
	        <div id="apDiv74">
	        	<img id="afeg04_5" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-05.png') }}">
	        </div>
	        <div id="apDiv75">
	        	<img id="afeg04_6" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-06.png') }}">
	        </div>
	        <div id="apDiv76">
	        	<img id="afeg04_7" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-07.png') }}">
	        </div>
	        <div id="apDiv77">
	        	<img id="afeg04_8" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-08.png') }}">
	        </div>
	        <div id="apDiv78">
	        	<img id="afeg04_9" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-09.png') }}">
	        </div>
	        <div id="apDiv79">
	        	<img id="afeg04_10" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-10.png') }}">
	        </div>
	        <div id="apDiv80">
	        	<img id="afeg04_11" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-11.png') }}">
	        </div>
	        <div id="apDiv81">
	        	<img id="afeg04_12" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-12.png') }}">
	        </div>
	        <div id="apDiv82">
	       		<img id="afeg04_13" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-13.png') }}">
	       	</div>
	        <div id="apDiv83">
	        	<img id="afeg04_14" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-14.png') }}">
	        </div>
	        <div id="apDiv84">
	        	<img id="afeg04_15" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-15.png') }}">
	        </div>
	        <div id="apDiv85">
	        	<img id="afeg04_16" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-16.png') }}">
	        </div>
	       <div id="apDiv86">
	       		<img id="afeg04_17" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-17.png') }}">
	       </div>
	       <div id="apDiv87">
	       		<img id="afeg04_18" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-18.png') }}">
	       </div>
	       <div id="apDiv88">
	       		<img id="afeg04_19" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-19.png') }}">
	       </div>
	       <div id="apDiv89">
	       		<img id="afeg04_20" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-20.png') }}">
	       	</div>
	       <div id="apDiv90">
	       		<img id="afeg04_21" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-21.png') }}">
	       	</div>
	       <div id="apDiv91">
	       		<img id="afeg04_22" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-22.png') }}">
	       	</div>
	       <div id="apDiv92">
	       		<img id="afeg04_23" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-23.png') }}">
	       	</div>
	       <div id="apDiv93">
	       		<img id="afeg04_24" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-24.png') }}">
	       	</div>
	       <div id="apDiv94">
	       		<img id="afeg04_25" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-25.png') }}">
	       	</div>
	       <div id="apDiv95">
	       		<img id="afeg04_26" width="61" height="13" src="{{ asset('images/Fade/administrativa/cod_afeg04-26.png') }}">
	       	</div>


	        <!-- Macroprocesos de la Facultad -->

	        <div id="apDiv59">
	        	<img id="academica" style="cursor:pointer" src="{{ asset('images/Fade/academica.png') }}" width="604" height="48" onclick="Academica()">
	        </div>
	        <div id="apDiv60">
	        	<img id="calidad" style="cursor:pointer" onclick="Calidad()" src="{{ asset('images/Fade/calidad.png') }}" width="604" height="48">
	        </div>
	        <div id="apDiv61">
	        	<img id="docencia" style="cursor:pointer" onclick="Docencia()" src="{{ asset('images/Fade/docencia.png') }}" width="196" height="63">
	        </div>
	        <div id="apDiv62">
	        	<img id="investigacion" style="cursor:pointer" onclick="Investigacion()" src="{{ asset('images/Fade/investigacion.png') }}" width="196" height="63">
	        </div>
	        <div id="apDiv63">
	        	<img id="vinculacion" style="cursor:pointer" onclick="Vinculacion()" src="{{ asset('images/Fade/vinculacion.png') }}" width="196" height="63">
	        </div>
	        <div id="apDiv64">
	        	<img id="asistencia" style="cursor:pointer;" onclick="Asistencia()" src="{{ asset('images/Fade/asistencia.png') }}" width="604" height="48">
	        </div>
	        <div id="apDiv65">
	        	<img id="academico" onclick="Academico()" style="cursor:pointer;" src="{{ asset('images/Fade/academico.png') }}" width="604" height="48">
	        </div>
	        <div id="apDiv66">
	        	<img id="financiero" style="cursor:pointer;" onclick="Financiero()" src="{{ asset('images/Fade/financiero.png') }}" width="604" height="48">
	        </div>
	        <div id="apDiv67">
	        	<img id="mantenimiento" style="cursor:pointer;" onclick="Mantenimiento()"  width="604" height="48" src="{{ asset('images/Fade/mantenimiento.png') }}">
	        </div>
	        <div id="apDiv68">
	        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" src="{{ asset('images/Fade/transporte.png') }}" width="604" height="48" >
	        </div>
	        <div id="apDiv69">
	        	<img src="{{ asset('images/Fade/informatico.png') }}" width="604" height="48" id="informatico" onclick="Informatico()" style="cursor:pointer;">
	        </div>
	        
	        <!-- Responsables de los procesos de la GEstion Academico azul(entradas) rojo(salidas) -->


	       <div id="apDiv96">
	       		<img id="internos" src="{{ asset('images/Responsables/externos_azul.png') }}">
	       	</div>
	       <div id="apDiv97">
	       		<img id="reglamento" onmouseover="ImgAzulReglamento()" onmouseout="BackAzulReglamento()" src="{{ asset('images/Responsables/reglamento.png') }}">
	       	</div>
	       <div id="apDiv98">
	       		<img id="sociedad" onmouseover="ImgAzulSociedad()" onmouseout="BackAzulSociedad()" src="{{ asset('images/Responsables/sociedad.png') }}">
	       	</div>
	       <div id="apDiv99">
	       		<img id="escuela" onmouseover="ImgAzulEscuelas()" onmouseout="BackAzulEscuelas()" src="{{ asset('images/Responsables/escuelas.png') }}">
	       	</div>
	       <div id="apDiv100">
	       		<img id="gcalidad" onmouseover="ImgAzulGCalidad()" onmouseout="BackAzulGCalidad()" src="{{ asset('images/Responsables/gestion.png') }}">
	       </div>
	       <div id="apDiv101">
	       		<img id="externo" src="{{ asset('images/Responsables/externo.png') }}">
	       </div>
	       <div id="apDiv102">
	       		<img id="estatuto" onmouseover="ImgAzulEstatuto()" onmouseout="BackAzulEstatuto()" src="{{ asset('images/Responsables/estatutoPizq.png') }}">
	       	</div>
	       <div id="apDiv103">
	       		<img id="internosizq" src="{{ asset('images/Responsables/externos_dere.png') }}">
	       	</div>
	 	    <div id="apDiv105">
	 	    	<img onmouseover="ImgRojoSeaaces()" onmouseout="BackRojoSeaaces()" src="{{ asset('images/Responsables/senecyt.png') }}">
	 	    </div>
	        <div id="apDiv106">
	        	<img onmouseover="ImgRojoConcejo()" onmouseout="BackRojoConcejo()" src="{{ asset('images/Responsables/consejopolitecnico.png') }}">
	        </div>
	        <div id="apDiv107">
	        	<img onmouseover="ImgRojoFADE()"  onmouseout="BackRojoFADE()" src="{{ asset('images/Responsables/fade.png') }}">
	        </div>  
	        <div id="apDiv108">
	        	<img onmouseover="ImgRojoRector()" onmouseout="BackRojoRector()" src="{{ asset('images/Responsables/rector.png') }}">
	        </div> 
	        <div id="apDiv109">
	        	<img onmouseover="ImgRojoVicerrector()" onmouseout="BackRojoVicerrector()" src="{{ asset('images/Responsables/escuelas_vice.png') }}">
	        </div>               
	                            
	        <!-- Footer -->     	
        <center>
		   <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
		</center>    




    </div>    

@stop