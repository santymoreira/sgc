@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesAcademica.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
	{{ HTML::script('js/FocusAcademica.js'); $var=Session::get('escuela'); }} 

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
                <img src="{{ asset('images/Contabilidad/academica.png'); }}">
            </div>
            @elseif($var == 7)
            <div id="apDiv32">
                <img src="{{ asset('images/distancia/academica.png'); }}">
            </div>
             @elseif($var == 1)
            <div id="apDiv32">
                <img src="{{ asset('images/Empresas/academica.png'); }}">
            </div>
              @elseif($var == 3)
            <div id="apDiv32">
                <img src="{{ asset('images/Exterior/academica.png'); }}">
            </div>
              @elseif($var == 4)
            <div id="apDiv32">
                <img src="{{ asset('images/Finanzas/academica.png'); }}">
            </div>
              @elseif($var == 5)
            <div id="apDiv32">
                <img src="{{ asset('images/Marketing/academica.png'); }}">
            </div>
              @elseif($var == 6)
            <div id="apDiv32">
                <img src="{{ asset('images/Transporte/academica.png'); }}">
            </div>
            @endif

           <!-- Procesos de la Gestión Academica -->

            <div id="apDiv77">
                  <a id="1" href="{{ asset('images/FichasProcesos/Fichas(afeg05-01)/proceso.png'); }}" rel="slideshow1">
                     <img id="afeg051" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-01.png'); }}">
                        <a id="1" href="{{ asset('images/FichasProcesos/Fichas(afeg05-01)/diagrama.png'); }}" rel="slideshow1"></a>
                        <a id="1" href="{{ asset('images/FichasProcesos/Fichas(afeg05-01)/indicador.png'); }}" rel="slideshow1"></a>
                  </a>            
            </div>
            <div id="apDiv78">
                  <a id="2" href="{{ asset('images/FichasProcesos/Fichas(afeg05-02)/proceso.png'); }}" rel="slideshow2">
                     <img id="afeg052" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-02.png'); }}">
                        <a id="2" href="{{ asset('images/FichasProcesos/Fichas(afeg05-02)/diagrama.png'); }}" rel="slideshow2"></a>
                        <a id="2" href="{{ asset('images/FichasProcesos/Fichas(afeg05-02)/indicador.png'); }}" rel="slideshow2"></a>
                  </a>             
            </div>	
            <div id="apDiv79">
                  <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-03)/proceso.png'); }}" rel="slideshow3">
                     <img id="afeg053" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-03.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-03)/diagrama.png'); }}" rel="slideshow3"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-03)/indicador.png'); }}" rel="slideshow3"></a>
                 </a>             
            </div>
            <div id="apDiv80">
                  <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-04)/proceso.png'); }}" rel="slideshow4">
                     <img id="afeg054" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-04.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-04)/diagrama.png'); }}" rel="slideshow4"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-04)/indicador.png'); }}" rel="slideshow4"></a>
                 </a>             
            </div>	
            <div id="apDiv81">
                  <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-07)/proceso.png'); }}" rel="slideshow5">
                     <img id="afeg057" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-07.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-07)/diagrama1.png'); }}" rel="slideshow5"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-07)/diagrama2.png'); }}" rel="slideshow5"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-07)/indicador.png'); }}" rel="slideshow5"></a>
                 </a>           
            </div>
            <div id="apDiv82">
                 <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-08)/proceso.png'); }}" rel="slideshow6">
                     <img id="afeg058" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-08.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-08)/diagrama.png'); }}" rel="slideshow6"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-08)/indicador.png'); }}" rel="slideshow6"></a>
                 </a>          
            </div>	
            <div id="apDiv83">
                 <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-09)/proceso.png'); }}" rel="slideshow7">
                     <img id="afeg059" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-09.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-09)/diagrama.png'); }}" rel="slideshow7"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-09)/indicador.png'); }}" rel="slideshow7"></a>
                 </a>              
            </div>
            <div id="apDiv84">
                 <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-05)/proceso.png'); }}" rel="slideshow8">
                     <img id="afeg055" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-05.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-05)/diagrama.png'); }}" rel="slideshow8"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-05)/indicador.png'); }}" rel="slideshow8"></a>
                 </a>           
            </div>	
            <div id="apDiv85">
                 <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-06)/proceso.png'); }}" rel="slideshow9">
                     <img id="afeg056" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg05-06.png'); }}">
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-06)/diagrama1.png'); }}" rel="slideshow9"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-06)/diagrama2.png'); }}" rel="slideshow9"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-06)/diagrama3.png'); }}" rel="slideshow9"></a>
                        <a  href="{{ asset('images/FichasProcesos/Fichas(afeg05-06)/indicador.png'); }}" rel="slideshow9"></a>
                 </a>               
            </div>

           <!-- Códigos de procesos Gestión Academica -->   

        <!-- pasan los parametros (nombre de proceso),(responsable),(macroproceso),(escuela),(proceso)-->
            <div id="apDiv100">
                 <a style="cursor:default;" href="../evaluacion/Elaborar la distribución de carga docente/Director de Escuela/5/{{Session::get('escuela')}}/1/1/1"  rel="floatbox">
                   <img src="{{ asset('images/ProcesosEscuelas/cod_afeg05-01.png'); }}"  width="51" height="12" id="afeg05_1" >
                 </a>   
            </div> 
            <div id="apDiv101">
                 <a style="cursor:default;" href="../evaluacion/Aprobar tema de tesis/Director de Escuela/5/{{Session::get('escuela')}}/2/1/2"  rel="floatbox">
                   <img id="afeg05_2" src="{{ asset('images/ProcesosEscuelas/cod_afeg05-02.png'); }}" width="51" height="12">
                 </a>        
            </div> 	
            <div id="apDiv102">
                 <a style="cursor:default;" href="../evaluacion/Elaborar horarios de clase/Director de Escuela/5/{{Session::get('escuela')}}/3/1/1"  rel="floatbox">
                   <img id="afeg05_3" src="{{ asset('images/ProcesosEscuelas/cod_afeg05-03.png'); }}"  width="51" height="12">
                 </a>         
            </div> 	
             <div id="apDiv103">
                 <a style="cursor:default;" href="../evaluacion/Rectificar calificaciones en el Sistema OASIS/Director de Escuela/5/{{Session::get('escuela')}}/4/1/2"  rel="floatbox">
                   <img id="afeg05_4" src="{{ asset('images/ProcesosEscuelas/cod_afeg05-04.png'); }}" width="51" height="12">
                 </a>        
            </div> 
            <div id="apDiv104">
                 <a style="cursor:default;" href="../evaluacion/Elaborar sílabos/Docente/5/{{Session::get('escuela')}}/7/4/1"  rel="floatbox">
                   <img id="afeg05_7" src="{{ asset('images/ProcesosEscuelas/cod_afeg05-07.png'); }}" width="51" height="12">
                 </a>
            </div>
            <div id="apDiv105">
                 <a style="cursor:default;" href="../evaluacion/Realizar estafeta/Docente/5/{{Session::get('escuela')}}/8/4/1"  rel="floatbox">
                   <img id="afeg05_8" src="{{ asset('images/ProcesosEscuelas/cod_afeg05-08.png'); }}" width="51" height="12">
                 </a>         
            </div> 
            <div id="apDiv107">
                 <a style="cursor:default;" href="../evaluacion/Rectificar notas/Docente/5/{{Session::get('escuela')}}/9/4/2"  rel="floatbox">
                   <img id="afeg05_9" src="{{ asset('images/ProcesosEscuelas/cod_afeg05-09.png'); }}" width="51" height="12">
                 </a>          
            </div> 	
            <div id="apDiv108">
                 <a style="cursor:default;" href="../evaluacion/Realizar prematriculación/Secretaria/5/{{Session::get('escuela')}}/5/2/2"  rel="floatbox">
                   <img id="afeg05_5" src="{{ asset('images/ProcesosEscuelas/cod_afeg05-05.png'); }}" width="51" height="12">
                 </a>         
            </div>
            <div id="apDiv109">
                 <a style="cursor:default;" href="../evaluacion/Legalizar matrícula/Docente/5/{{Session::get('escuela')}}/6/2/2"  rel="floatbox">
                   <img id="afeg05_6" src="{{ asset('images/ProcesosEscuelas/cod_afeg05-06.png'); }}" width="51" height="12">
                 </a>
            </div>

            <!-- Macroprocesos de la escuela -->

            <div id="apDiv70">
            	<img  id="gestionadmin" style="cursor:pointer;" src="{{ asset('images/MacroprocesosEscuelas/GestionAdmin.png'); }}" width="639" height="48" onclick="GestionAdmin();">
            </div>
            <div id="apDiv72">
            	<img src="{{ asset('images/MacroprocesosEscuelas/docencia.png'); }}" width="207" height="66" id="docencia" style="cursor:pointer;"  onclick="Docencia();">
            </div>
            <div id="apDiv73">
            	<img src="{{ asset('images/MacroprocesosEscuelas/investigacion.png'); }}"  width="207" height="66" id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
            </div>
            <div id="apDiv74">
            	<img src="{{ asset('images/MacroprocesosEscuelas/vinculacion.png'); }}" width="207" height="66" id="vinculacion" style="cursor:pointer;"  onclick="Vinculacion();">
            </div>
            <div id="apDiv75">
            	<img src="{{ asset('images/MacroprocesosEscuelas/asistencia.png'); }}" width="627" height="50" style="cursor:pointer;"  onclick="Asistencia();">
            </div>  
            <div id="apDiv76">
            	<img src="{{ asset('images/MacroprocesosEscuelas/mantenimiento.png'); }}" id="mantenimiento" width="627" height="50" style="cursor:pointer;"  onclick="Mantenimiento();">
            </div>
          
            <!-- Botones de responsables entradas(azul) Salidas(rojo) -->
            
            <div id="apDiv87">
            	<img src="{{ asset('images/Responsables/internos.png'); }}" />
            </div>
	        <div id="apDiv88">
	        	<img id="AzulDecanato" onmouseover="ImgAzulDecanato()" onmouseout="BackAzulDecanato()" src="{{ asset('images/Responsables/decanato.png'); }}">
	        </div>
	        <div id="apDiv89">
	        	<img id="AzulCIADES" onmouseover="ImgAzulCIADES()" onmouseout="BackAzulCIADES()" src="{{ asset('images/Responsables/ciades.png'); }}">
	        </div>
	        <div id="apDiv90">
	        	<img src="{{ asset('images/Responsables/direccionescuela.png'); }}">
	        </div>
	        <div id="apDiv91">
	        	<img id="AzulComision" onmouseover="ImgAzulComision()" onmouseout="BackAzulComision()"   src="{{ asset('images/Responsables/comisionplanificacion.png'); }}">
	        </div>
	        <div id="apDiv92">
	        	<img id="AzulNoId" onmouseover="ImgAzulNoId()" onmouseout="BackAzulNoId()" src="{{ asset('images/Responsables/procesoNoId.png'); }}">
	        </div>
	        <div id="apDiv93">
	       		<img src="{{ asset('images/Responsables/externos.png'); }}">
	       	</div>
	        <div id="apDiv94">
	        	<img id="AzulEstatuto" onmouseover="ImgAzulEstatuto()" onmouseout="BackAzulEstatuto()"  src="{{ asset('images/Responsables/estatutoPizq.png'); }}">
	        </div>
	        <div id="apDiv95">
	        	<img src="{{ asset('images/Responsables/internos_dere.png'); }}">
	        </div>
	        <div id="apDiv96">
	       		<img id="CIADESrojo" onmouseover="ImgRojoCIADES()" onmouseout="BackRojoCIADES()" src="{{ asset('images/Responsables/ciades.png'); }}">
	       	</div>
	        <div id="apDiv97">
	        	<img id="comisionrojo" onmouseover="ImgRojoComision()" onmouseout="BackRojoComision()" src="{{ asset('images/Responsables/comisionplanificacion.png'); }}">
	        </div>
	        <div id="apDiv98">
	        	<img id="NoIdrojo" onmouseover="ImgRojoNoId()" onmouseout="BackRojoNoId()" src="{{ asset('images/Responsables/procesoNoId_interno.png'); }}">
	        </div>
	        <div id="apDiv99">
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