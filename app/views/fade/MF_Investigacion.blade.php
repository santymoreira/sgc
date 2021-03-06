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
	        
	        	<div id="apDiv31">
	        		<img src="{{ asset('images/Fade/investigacion/contenedor.png') }}">
	        	</div>

	        	<!-- procesos de la investigacion en la fade -->

	           <div id="apDiv163">
	           		<img src="{{ asset('images/Fade/investigacion/afec02-01.png') }}" id="afeg021" style="cursor:pointer">
	           	</div>
		       <div id="apDiv181">
		       		<img src="{{ asset('images/Fade/investigacion/afec02-02.png') }}" id="afeg022" style="cursor:pointer">
		       	</div>
		       <div id="apDiv182">
		       		<img src="{{ asset('images/Fade/investigacion/afec02-03.png') }}" id="afeg023" style="cursor:pointer">
		       	</div>
		       
		       	<!-- códigos de los procesos de investigacion-fade -->

		       <div id="apDiv183">
		       		<img src="{{ asset('images/Fade/investigacion/cod_afec02-01.png') }}" width="61" height="19" id="afeg02_1">
		       	</div>
		       <div id="apDiv184">
		       		<img src="{{ asset('images/Fade/investigacion/cod_afec02-02.png') }}" width="61" height="19" id="afeg02_2">
		       	</div>
		       <div id="apDiv185">
		       		<img src="{{ asset('images/Fade/investigacion/cod_afec02-03.png') }}" width="61" height="19" id="afeg02_3">
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
		        	<img id="mantenimiento" style="cursor:pointer;"  width="604" height="48" src="{{ asset('images/Fade/mantenimiento.png') }}">
		        </div>
		        <div id="apDiv115">
		        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/Fade/transporte.png') }}">
		        </div>
		        <div id="apDiv69">
		        	<img src="{{ asset('images/Fade/informatico.png') }}" width="604" height="48" id="informatico" onclick="Informatico()" style="cursor:pointer;">
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