@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesInvestigacion.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
    {{ HTML::script('js/FocusInvestigacion.js'); $var=Session::get('escuela'); }}

@stop

@section('not_general_styles')
  {{ HTML::style('css/floatbox_1.css'); }}
  {{ HTML::script('js/framebox_1.js'); }}

@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				       		 @if($var == 2)  
                     <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_sgc','SGC'); }}  
                        @elseif($var ==7)
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('E_distancia/distancia_sgc','SGC'); }}  
                        @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('empresas/empresas_sgc','SGC'); }}  
                        @elseif($var ==3)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('C_exterior/exterior_sgc','SGC'); }}  
                        @elseif($var ==4)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzas/finanzas_sgc','SGC'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketing/marketing_sgc','SGC'); }}  
                        @elseif($var ==6)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/transporte_sgc','SGC'); }}  
                      @endif
                           <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a>
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
			
      @if($var == 2)  
			<div id="apDiv32">
			  		<img src="{{ asset('images/Contabilidad/investigacion.png'); }}">
			</div>	
      @elseif($var ==7)
      <div id="apDiv32">
            <img src="{{ asset('images/distancia/investigacion.png'); }}">
      </div> 
       @elseif($var ==1)
      <div id="apDiv32">
            <img src="{{ asset('images/Empresas/investigacion.png'); }}">
      </div>  
       @elseif($var ==3)
      <div id="apDiv32">
            <img src="{{ asset('images/Exterior/investigacion.png'); }}">
      </div>  
        @elseif($var ==4)
      <div id="apDiv32">
            <img src="{{ asset('images/Finanzas/investigacion.png'); }}">
      </div> 
       @elseif($var ==5)
      <div id="apDiv32">
            <img src="{{ asset('images/Marketing/investigacion.png'); }}">
      </div> 
       @elseif($var ==6)
      <div id="apDiv32">
            <img src="{{ asset('images/Transporte/investigacion.png'); }}">
      </div>  
      @endif

			<!-- Procesos de la Gestión de Investigacion -->

			<div id="apDiv95">
          		 <a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-01)/proceso.png'); }}" rel="slideshow1">
                        <img id="afeg021" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg02-01.png'); }}">
                		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-01)/diagrama1.png'); }}" rel="slideshow1"></a>
                 		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-01)/diagrama2.png'); }}" rel="slideshow1"></a>
                 		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-01)/indicador.png'); }}" rel="slideshow1"></a>
           		</a>               
       		</div>
       		<div id="apDiv96">
          		 <a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-02)/proceso.png'); }}" rel="slideshow2">
                		<img id="afeg022" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg02-02.png'); }}">
                		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-02)/diagrama.png'); }}" rel="slideshow2"></a>
                		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-02)/indicador.png'); }}" rel="slideshow2"></a>
           		</a>         
      		</div>
      		<div id="apDiv97">
          		 <a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-03)/proceso.png'); }}" rel="slideshow3">
                 	    <img id="afeg023"  src="{{ asset('images/ProcesosEscuelas/afeg02-03.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-03)/diagrama.png'); }}" rel="slideshow3"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg02-03)/indicador.png'); }}" rel="slideshow3"></a>
         		 </a>              
      		</div>	

      		     <!-- Códigos de procesos Gestión de Investigacion -->   

      		 <div id="apDiv105">
                 <a style="cursor:default;" href="../evaluacion/Realizar tutorías de tesis/Docente/2/{{Session::get('escuela')}}/1/4/1"  rel="floatbox">
             		<img id="afeg02_1" src="{{ asset('images/ProcesosEscuelas/cod_afeg02-01.png'); }}" width="50" height="15">
                 </a>        
            </div>
            <div id="apDiv106">
                 <a style="cursor:default;" href="../evaluacion/Asistir a la defensa/Docente/2/{{Session::get('escuela')}}/2/4/1"  rel="floatbox">
             		<img id="afeg02_2" src="{{ asset('images/ProcesosEscuelas/cod_afeg02-02.png'); }}" width="50" height="15">
                 </a>           
            </div> 
            <div id="apDiv107">
                 <a style="cursor:default;" href="../evaluacion/Hacer investigación/Docente/2/{{Session::get('escuela')}}/3/4/1"  rel="floatbox">
             		<img id="afeg02_3" src="{{ asset('images/ProcesosEscuelas/cod_afeg02-03.png'); }}" width="50" height="15">
                 </a>             
            </div>

              <!-- Macroprocesos de la escuela -->   	

            <div id="apDiv43">
            		<img src="{{ asset('images/MacroprocesosEscuelas/GestionAdmin.png'); }}" id="gestionadmin" style="cursor:pointer;" width="630" height="47" onclick="GestionAdmin();">
            </div>
     	    <div id="apDiv87">
     	    		<img src="{{ asset('images/MacroprocesosEscuelas/GestionAcade.png'); }}" id="gestionacad" style="cursor:pointer;" width="629" height="47" onclick="GestionAcademica();">
     	    </div>
      		<div id="apDiv38">
      				<img src="{{ asset('images/MacroprocesosEscuelas/docencia.png'); }}" width="207" height="66" id="docencia" style="cursor:pointer;"  onclick="Docencia();">
      		</div>
      		<div id="apDiv40">
      				<img src="{{ asset('images/MacroprocesosEscuelas/vinculacion.png'); }}" width="207" height="66" id="vinculacion" style="cursor:pointer;"  onclick="Vinculacion();">
      		</div>
       		<div id="apDiv36">
       				<img src="{{ asset('images/MacroprocesosEscuelas/asistencia.png'); }}" id="asistencia" width="627" height="50" style="cursor:pointer;"  onclick="Asistencia();">
       		</div> 
      		<div id="apDiv37">
      				<img src="{{ asset('images/MacroprocesosEscuelas/mantenimiento.png'); }}" id="mantenimiento" width="627" height="50" style="cursor:pointer;"  onclick="Mantenimiento();">
      		</div>

      		<!-- Botones de responsables entradas(azul) Salidas(rojo) --> 

      		<div id="apDiv98">
      			<img src="{{ asset('images/Responsables/internos.png'); }}">
      		</div>
      		<div id="apDiv99">
      			<img id="AzulComision" onmouseover="ImgAzulComision()" onmouseout="BackAzulComision()" src="{{ asset('images/Responsables/comisionplanificacion.png'); }}">
      		</div>
      		<div id="apDiv100">
      			<img src="{{ asset('images/Responsables/externos.png'); }}">
      		</div>
     		<div id="apDiv101">
     			<img id="AzulNoId" onmouseover="ImgAzulNoId()" onmouseout="BackAzulNoId()" src="{{ asset('images/Responsables/NoIdEstu.png'); }}">
     		</div>
    		<div id="apDiv102">
    			<img src="{{ asset('images/Responsables/internos_dere.png'); }}">
    		</div>
    		<div id="apDiv103">
    			<img id="CIADES" onmouseover="ImgRojoCIADES()" onmouseout="BackRojoCIADES()" src="{{ asset('images/Responsables/ciades.png'); }}">
    		</div>
    		<div id="apDiv104">
    			<img src="{{ asset('images/Responsables/externos.png'); }}">
    		</div>
      
     <!-- Footer --> 
         <div id="footer_academica" class="cleared"> 
              <center> <p style="font-size:10px;color:#03F">&nbsp;</p>
                <p style="font-size:10px;color:#03F">&nbsp;</p>
                <p style="font-size:10px;color:#03F">&nbsp;</p>
               <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                          <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
                       </p>
              </center>
          </div>  
    
    </div>
@stop     