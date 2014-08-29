@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesInvestigacionF.css'); }}
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
	        		<img src="{{ asset('images/fade/investigacion/contenedor.png') }}">
	        	</div>

	        	<!-- procesos de la investigacion en la fade -->

	           <div id="apDiv163">
	           		<img src="{{ asset('images/fade/investigacion/afec02-01.png') }}" id="afeg021" style="cursor:pointer">
	           	</div>
		       <div id="apDiv181">
		       		<img src="{{ asset('images/fade/investigacion/afec02-02.png') }}" id="afeg022" style="cursor:pointer">
		       	</div>
		       <div id="apDiv182">
		       		<img src="{{ asset('images/fade/investigacion/afec02-03.png') }}" id="afeg023" style="cursor:pointer">
		       	</div>
		       
		       	<!-- códigos de los procesos de investigacion-fade -->

		       <div id="apDiv183">
		       		<img src="{{ asset('images/fade/investigacion/cod_afec02-01.png') }}" width="61" height="19" id="afeg02_1">
		       	</div>
		       <div id="apDiv184">
		       		<img src="{{ asset('images/fade/investigacion/cod_afec02-02.png') }}" width="61" height="19" id="afeg02_2">
		       	</div>
		       <div id="apDiv185">
		       		<img src="{{ asset('images/fade/investigacion/cod_afec02-03.png') }}" width="61" height="19" id="afeg02_3">
		       	</div>
		      
		       	<!-- macroprocesos de la facultad -->	

		       	<div id="apDiv105">
		       		<img src="{{ asset('images/fade/administrativa.png') }}" width="604" height="48" id="administrativa" style="cursor:pointer;" onclick="Administrativa()">
		       	</div>
		        <div id="apDiv106">
		        	<img src="{{ asset('images/fade/academica.png') }}" width="604" height="48" id="academica" style="cursor:pointer;"  onclick="Academica()">
		        </div>
		        <div id="apDiv107">
		        	<img id="calidad" style="cursor:pointer;" width="604" height="48" onclick="Calidad()" src="{{ asset('images/fade/calidad.png') }}">
		        </div>
		        <div id="apDiv109">
		        	<img id="docencia" style="cursor:pointer;" onclick="Docencia()" src="{{ asset('images/fade/docencia.png') }}" width="196" height="63">
		        </div>
		        <div id="apDiv110">
		        	<img id="vinculacion" style="cursor:pointer;" onclick="Vinculacion()" src="{{ asset('images/fade/vinculacion.png') }}" width="196" height="63">
		        </div>
		        <div id="apDiv111">
		        	<img id="asistencia" style="cursor:pointer;" width="604" height="48" onclick="Asistencia()" src="{{ asset('images/fade/asistencia.png') }}">
		        </div>
		        <div id="apDiv112">
		        	<img id="academico" style="cursor:pointer;" onclick="Academico()"  width="604" height="48" src="{{ asset('images/fade/academico.png') }}">
		        </div>
		        <div id="apDiv113">
		        	<img id="financiero" style="cursor:pointer;" onclick="Financiero()" width="604" height="48" src="{{ asset('images/fade/financiero.png') }}">
		        </div>
		        <div id="apDiv114">
		        	<img id="mantenimiento" style="cursor:pointer;" onclick="Mantenimiento()" width="604" height="48" src="{{ asset('images/fade/mantenimiento.png') }}">
		        </div>
		        <div id="apDiv115">
		        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/fade/transporte.png') }}">
		        </div>
		        <div id="apDiv69">
		        	<img src="{{ asset('images/fade/informatico.png') }}" width="604" height="48" id="informatico" onclick="Informatico()" style="cursor:pointer;">
		        </div>


		       	<!-- responsables de los procesos de investigacion en la fade -->	

		       	<div id="apDiv175">
		       		<img src="{{ asset('images/Responsables/internos.png') }}">
		       	</div>
			    <div id="apDiv186">
			    	<img onmouseover="ImgAzulComision()" onmouseout="BackAzulComision()" src="{{ asset('images/Responsables/comisionplanificacion.png') }}">
			    </div>
			    <div id="apDiv176">
			    	<img src="{{ asset('images/Responsables/externos.png') }}">
			    </div>
			    <div id="apDiv177">
			    	<img onmouseover="ImgAzulNoId()" onmouseout="BackAzulNoId()" src="{{ asset('images/Responsables/NoIdEstu.png') }}">
			    </div>
			    <div id="apDiv178">
			    	<img src="{{ asset('images/Responsables/internos_dere.png') }}">
			    </div>
			    <div id="apDiv179">
			    	<img onmouseover="ImgRojoCIADES()" onmouseout="BackRojoCIADES()" src="{{ asset('images/Responsables/ciades.png') }}">
			    </div>
			    <div id="apDiv180">
			    	<img src="{{ asset('images/Responsables/externos.png') }}">
			    </div>
					      
		
		       <!-- Footer -->     	
		       
		        <center>
				   <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
				</center>    


		</div>        
@stop