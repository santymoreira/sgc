@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesDocencia.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
	{{ HTML::script('js/FocusDocencia.js'); $var=Session::get('escuela'); }} 

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
			  		<img src=" {{ asset('images/Contabilidad/docencia.png'); }}">
			  </div>	
        @elseif($var ==7)
        <div id="apDiv32">
            <img src=" {{ asset('images/distancia/docencia.png'); }}">
        </div>
        @elseif($var ==1)
        <div id="apDiv32">
            <img src=" {{ asset('images/Empresas/docencia.png'); }}">
        </div>
        @elseif($var ==3)
        <div id="apDiv32">
            <img src=" {{ asset('images/Exterior/docencia.png'); }}">
        </div>
         @elseif($var ==4)
        <div id="apDiv32">
            <img src=" {{ asset('images/Finanzas/docencia.png'); }}">
        </div>
         @elseif($var ==5)
        <div id="apDiv32">
            <img src=" {{ asset('images/Marketing/docencia.png'); }}">
        </div>
         @elseif($var ==6)
        <div id="apDiv32">
            <img src=" {{ asset('images/Transporte/docencia.png'); }}">
        </div>
        @endif 
		  <!-- Procesos de la Gestión de Docencia -->
		    <div id="apDiv88">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-01)/proceso.png'); }}" rel="slideshow1">
                     <img id="afeg011" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg01-01.png'); }}">
                         <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-01)/diagrama.png'); }}" rel="slideshow1"></a>
                         <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-01)/indicador.png'); }}" rel="slideshow1"></a>
                </a>         
            </div>	 	
            <div id="apDiv89">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-02)/proceso.png'); }}" rel="slideshow2">
                     <img id="afeg012" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg01-02.png'); }}">
                         <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-02)/diagrama.png'); }}" rel="slideshow2"></a>
                         <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-02)/indicador.png'); }}" rel="slideshow2"></a>
                </a>          
            </div>	
            <div id="apDiv90">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-03)/proceso.png'); }}" rel="slideshow3">
                    <img id="afeg013" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg01-03.png'); }}">
                         <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-03)/diagrama.png'); }}" rel="slideshow3">
                         <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-03)/indicador.png'); }}" rel="slideshow3">
                </a>              
            </div>
             <div id="apDiv91">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-04)/proceso.png'); }}" rel="slideshow4">
                    <img id="afeg014" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg01-04.png'); }}">
                         <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-04)/diagrama.png'); }}" rel="slideshow4"></a>
                         <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-04)/indicador.png'); }}" rel="slideshow4"></a>
                </a>       
            </div>
            <div id="apDiv92">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-05)/proceso.png'); }}" rel="slideshow5">
                    <img id="afeg015" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg01-05.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-05)/diagrama1.png'); }}" rel="slideshow5"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-05)/diagrama2.png'); }}" rel="slideshow5"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-05)/indicador.png'); }}" rel="slideshow5"></a>
                </a>                 
            </div>
            <div id="apDiv93">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-06)/proceso.png'); }}" rel="slideshow6">
                    <img id="afeg016" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg01-06.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-06)/diagrama1.png'); }}" rel="slideshow6"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-06)/diagrama2.png'); }}" rel="slideshow6"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg01-06)/indicador.png'); }}" rel="slideshow6"></a>
                </a>                        
            </div>

            <!-- Códigos de procesos Gestión de Docencia -->   

            <div id="apDiv101">
                <a style="cursor:default;" href="../evaluacion/Preparar clases/Docente/1/{{Session::get('escuela')}}/1/4/1"  rel="floatbox">
          	        <img id="afeg01_1" src="{{ asset('images/ProcesosEscuelas/cod_afeg01-01.png'); }}" width="50" height="15">
                </a>       
            </div> 
            <div id="apDiv102">
                <a style="cursor:default;" href="../evaluacion/Dictar clases/Docente/1/{{Session::get('escuela')}}/2/4/2"  rel="floatbox">
                	<img  id="afeg01_2" src="{{ asset('images/ProcesosEscuelas/cod_afeg01-02.png'); }}" width="50" height="15">	
                </a>           
            </div>	
            <div id="apDiv103">
                <a style="cursor:default;" href="../evaluacion/Evaluar a los estudiantes/Docente/1/{{Session::get('escuela')}}/3/4/2"  rel="floatbox">
           		    <img id="afeg01_3" src="{{ asset('images/ProcesosEscuelas/cod_afeg01-03.png'); }}" width="50" height="15">
                </a>                   
            </div> 
            <div id="apDiv104">
                <a style="cursor:default;" href="../evaluacion/Realizar promedios/Docente/1/{{Session::get('escuela')}}/4/4/1"  rel="floatbox">
                 	<img id="afeg01_4" src="{{ asset('images/ProcesosEscuelas/cod_afeg01-04.png'); }}" width="50" height="15">
                </a>                   
            </div>
            <div id="apDiv105">
                <a style="cursor:default;" href="../evaluacion/Ingresar notas al Sistema OASIS/Docente/1/{{Session::get('escuela')}}/5/4/1"  rel="floatbox">
                	<img id="afeg01_5" src="{{ asset('images/ProcesosEscuelas/cod_afeg01-05.png'); }}" width="50" height="15">
               </a>                  
            </div>
            <div id="apDiv106">
                <a style="cursor:default;" href="../evaluacion/Entregar actas/Docente/1/{{Session::get('escuela')}}/6/4/1"  rel="floatbox">
                    <img id="afeg01_6" src="{{ asset('images/ProcesosEscuelas/cod_afeg01-06.png'); }}" width="50" height="15">
                </a>                  
            </div>

            <!-- Macroprocesos de la escuela -->

            <div id="apDiv43">
            	<img src="{{ asset('images/MacroprocesosEscuelas/GestionAdmin.png'); }}" id="gestionadmin" style="cursor:pointer;" width="639" height="48" onclick="GestionAdmin();">
            </div>
       		<div id="apDiv87">
       			<img src="{{ asset('images/MacroprocesosEscuelas/GestionAcade.png'); }}" id="gestionacad" style="cursor:pointer;" width="639" height="48" onclick="GestionAcademica();">
       		</div>
            <div id="apDiv94">
            	<img src="{{ asset('images/MacroprocesosEscuelas/investigacion.png'); }}" width="207" height="66" id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
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

     		<div id="apDiv95">
     			<img src="{{ asset('images/Responsables/internos.png'); }}">
     		</div>
      		<div id="apDiv96">
      			<img src="{{ asset('images/Responsables/externos.png'); }}">
      		</div>
      		<div id="apDiv97">
      			<img id="AzulEstatuto" onmouseover="ImgAzulEstatuto()" onmouseout="BackAzulEstatuto()" src="{{ asset('images/Responsables/estatutoPizq.png'); }}">
      		</div>
      		<div id="apDiv98">
      			<img src="{{ asset('images/Responsables/internos_dere.png'); }}">
      		</div>
      		<div id="apDiv99">
      			<img id="RojoNoId" onmouseover="ImgRojoNoId()" onmouseout="BackRojoNoId()" src="{{ asset('images/Responsables/procesoNoId_rojo.png'); }}">
      		</div>
      		<div id="apDiv100">
      			<img src="{{ asset('images/Responsables/externos.png'); }}">
      		</div>
      	
         <!-- Footer --> 
            
            </br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br>
            
        <center>
        <p style="font-size:10px;color:#03F">&nbsp;</p>

           <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                    <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
            </p>

            </center> 

     </div>  

@stop     