@extends('home.layout')

@section('Different_Styles')
	@parent
{{ HTML::style('css/StylesAdministrativa.css'); }}
  {{ HTML::style('css/Evaluacionfloatbox.css'); }}
  {{ HTML::script('js/Evaluacionfloatbox.js'); }}
  {{ HTML::script('js/FocusAdministrativa.js');  $var= Session::get('escuela'); }}

@stop


@section('not_general_styles')
  {{ HTML::style('css/floatbox_1.css'); }}
  {{ HTML::script('js/framebox_1.js'); }}

@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				       		<li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_sgc', 'SGC'); }} 
                       		<li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/macroprocesos','Volver'); }}  
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
           @if($var ==1)
            <div id="apDiv32">
              <img src="{{ asset('images/contabilidad/administrativa.png') }}">
            </div>   
           @elseif($var ==2)
            <div id="apDiv32">
              <img src="{{ asset('images/distancia/administrativa.png') }}">
            </div>
           @elseif($var ==3)
            <div id="apDiv32">
              <img src="{{ asset('images/empresas/administrativa.png') }}">
            </div> 
          @elseif($var ==4)
            <div id="apDiv32">
              <img src="{{ asset('images/exterior/administrativa.png') }}">
            </div> 
           @elseif($var ==5)
            <div id="apDiv32">
              <img src="{{ asset('images/finanzas/administrativa.png') }}">
            </div>
           @elseif($var ==6)
            <div id="apDiv32">
              <img src="{{ asset('images/marketing/administrativa.png') }}">
            </div>
           @elseif($var ==7)
            <div id="apDiv32">
              <img src="{{ asset('images/transporte/administrativa.png') }}">
            </div> 
           @endif

         <!-- Procesos de la Gestión Administrativa -->   	
             <div id="apDiv33">
                <a id="1" href="{{ asset('images/FichasProcesos/Fichas(afeg04-01)/proceso.png') }}" rel="slideshow1">
                      <img id="afeg041" src="{{ asset('images/ProcesosEscuelas/afeg04-01.png'); }}"  style="cursor:pointer;" />
             		  <a href="{{ asset('images/FichasProcesos/Fichas(afeg04-01)/diagrama.png') }}" rel="slideshow1"></a>
                	  <a href="{{ asset('images/FichasProcesos/Fichas(afeg04-01)/indicador.png') }}" rel="slideshow1"></a>
            	</a>    
            </div> 
            <div id="apDiv44">
                <a id="2" href="{{ asset('images/FichasProcesos/Fichas(afeg04-02)/proceso.png') }}" rel="slideshow2">
                      <img id="afeg042" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg04-02.png'); }}" >
                      <a href="{{ asset('images/FichasProcesos/Fichas(afeg04-02)/diagrama.png') }}" rel="slideshow2"></a>
                      <a href="{{ asset('images/FichasProcesos/Fichas(afeg04-02)/indicador.png') }}" rel="slideshow2"></a>    
                </a>            
            </div>  
            <div id="apDiv46">
                <a id="3" href="{{ asset('images/FichasProcesos/Fichas(afeg04-06)/proceso.png') }}" rel="slideshow3">
                      <img id="afeg046" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg04-06.png'); }}">
                      <a id="3" href="{{ asset('images/FichasProcesos/Fichas(afeg04-06)/diagrama.png') }}" rel="slideshow3"></a>
                      <a id="3" href="{{ asset('images/FichasProcesos/Fichas(afeg04-06)/indicador.png') }}" rel="slideshow3"></a>
                </a>        
            </div>
            <div id="apDiv48">
                 <a id="4" href="{{ asset('images/FichasProcesos/Fichas(afeg04-07)/proceso.png') }}" rel="slideshow4">
                      <img id="afeg047" style="cursor:pointer;"  src="{{ asset('images/ProcesosEscuelas/afeg04-07.png'); }}">
                      <a id="4" href="{{ asset('images/FichasProcesos/Fichas(afeg04-07)/diagrama.png') }}" rel="slideshow4"></a>
                      <a id="4" href="{{ asset('images/FichasProcesos/Fichas(afeg04-07)/indicador.png') }}" rel="slideshow4"></a>
                 </a>      
            </div> 
            <div id="apDiv50">
                 <a id="5" href="{{ asset('images/FichasProcesos/Fichas(afeg04-03)/proceso.png') }}" rel="slideshow5">
                       <img id="afeg043" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg04-03.png'); }}"></div>
                       <a id="5" href="{{ asset('images/FichasProcesos/Fichas(afeg04-03)/diagrama.png') }}" rel="slideshow5"></a>
                       <a id="5" href="{{ asset('images/FichasProcesos/Fichas(afeg04-03)/indicador.png') }}" rel="slideshow5"></a>
                 </a>
            </div> 
            <div id="apDiv52">
                 <a id="6" href="{{ asset('images/FichasProcesos/Fichas(afeg04-04)/proceso.png') }}" rel="slideshow6">
                       <img id="afeg044" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg04-04.png'); }}">
                       <a id="6" href="{{ asset('images/FichasProcesos/Fichas(afeg04-04)/diagrama.png') }}" rel="slideshow6"></a>
                       <a id="6" href="{{ asset('images/FichasProcesos/Fichas(afeg04-04)/indicador.png') }}" rel="slideshow6"></a>
                 </a>         
            </div>  
            <div id="apDiv54">
                 <a id="7" href="{{ asset('images/FichasProcesos/Fichas(afeg04-05)/proceso.png') }}" rel="slideshow7">
                       <img  id="afeg045" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg04-05.png'); }}">
                       <a id="7" href="{{ asset('images/FichasProcesos/Fichas(afeg04-05)/diagrama.png') }}" rel="slideshow7"></a>
                       <a id="7" href="{{ asset('images/FichasProcesos/Fichas(afeg04-05)/indicador.png') }}" rel="slideshow7"></a>
                 </a>            
            </div>

            <!-- Macroprocesos de la Escuela --> 
             <div id="apDiv43">
             	<img src="{{ asset('images/MacroprocesosEscuelas/GestionAcade.png'); }}" id="gestionacad" style="cursor:pointer;" width="639" height="48" onclick="GestionAcademica();">
             </div>
             <div id="apDiv38">
             	<img src="{{ asset('images/MacroprocesosEscuelas/docencia.png'); }}" width="207" height="66" id="docencia" style="cursor:pointer;"  onclick="Docencia();">
             </div>
             <div id="apDiv39">
             	<img src="{{ asset('images/MacroprocesosEscuelas/investigacion.png'); }}"  width="207" height="66" id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
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
          
            <!-- Códigos de procesos Gestión Administrativa --> 	


             <div id="apDiv42">
             	     <a style="cursor:default;" href="../evaluacion/Colaborar en la elaboración del POA de la Escuela/Director de Escuela/4/2/1/1" 
                   rel="floatbox" >
                         <img src="{{ asset('images/ProcesosEscuelas/cod_afeg04-01.png'); }}" width="51" height="12" id="afeg04_1"></img>
                     </a>    
             </div>


             <div id="apDiv45">

                     <a id="afeg02" style="cursor:default;" rel="floatbox" href="../evaluacion/Controlar la asistencia a los docentes/Director de Escuela/4/2/2/1" >
                         <img src="{{ asset('images/ProcesosEscuelas/cod_afeg04-02.png'); }}" width="51" height="12" id="afeg04_2">
                     </a>         
             </div>            
             <div id="apDiv47">
              <!-- pasan los parametros (nombre de proceso),(responsable),(macroproceso),(escuela),(proceso)-->
                     <a style="cursor:default;" href="../evaluacion/Asistir a reuniones/Docentes/4/2/6/4"  rel="floatbox">
                         <img src="{{ asset('images/ProcesosEscuelas/cod_afeg04-06.png'); }}" width="51" height="12" id="afeg04_6">
                     </a>      
             </div>
             <div id="apDiv49">
                     <a style="cursor:default;" href="../evaluacion/Supervisar las pruebas de Admisión/Secretaria/4/2/7/2"  rel="floatbox">
                         <img src="{{ asset('images/ProcesosEscuelas/cod_afeg04-07.png'); }}" width="51" height="12" id="afeg04_7">
                     </a>        
             </div>
             <div id="apDiv51">
                     <a id="paul" style="cursor:default;" href="../evaluacion/Entregar a Decanato la asistencia docente/Director de Escuela/4/2/3/1"  rel="floatbox">
                         <img src="{{ asset('images/ProcesosEscuelas/cod_afeg04-03.png'); }}" width="51" height="12" id="afeg04_3">
                     </a>         
             </div>
             <div id="apDiv53">
                     <a style="cursor:default;" href="../evaluacion/Asistir a Comisión Académica y Desarrollo Administrativo/Director de Escuela/4/2/4/1"  rel="floatbox">
                         <img src="{{ asset('images/ProcesosEscuelas/cod_afeg04-04.png'); }}" width="51" height="12" id="afeg04_4">
                     </a>            
             </div>
             <div id="apDiv55">
                     <a style="cursor:default;" href="../evaluacion/Comunicar a los docentes/Director de Escuela/4/2/5/1" rel="floatbox">
                         <img src="{{ asset('images/ProcesosEscuelas/cod_afeg04-05.png'); }}" width="51" height="12" id="afeg04_5">
                     </a>    
             </div> 
		   
               <!-- Botones de responsables entradas(azul) Salidas(rojo) -->
           
             <div id="apDiv57">
                <img src="{{ asset('images/Responsables/internos.png'); }}">
              </div>
             <div id="apDiv58">
                <img id="decanato" onmouseout="Back_Decanato()" onmouseover="CambiaImagenes_Decanato()" src="{{ asset('images/Responsables/decanato.png'); }}"/>
             </div>
             <div id="apDiv59">
                <img src="{{ asset('images/Responsables/externos.png'); }}">
              </div>
             <div id="apDiv60">
                <img id="estatutos" onmouseout="Back_Estatutos()" onmouseover="Imagenes_Estatutos()" src="{{ asset('images/Responsables/estatutoazul.png'); }}">
              </div>
             <div id="apDiv61">
                <img id="noidentificado" onmouseout="Back_NoId()" onmouseover="Imagenes_NoId()"src="{{ asset('images/Responsables/procesoNoId_rojo.png'); }}">
              </div>
             <div id="apDiv63">
                <img src="{{ asset('images/Responsables/internos_dere.png'); }}">
             </div>
             <div id="apDiv65">
                <img id="rojoNoId" onmouseover="ImgRojoNoId()" onmouseout="RojoBackNoId()" src="{{ asset('images/Responsables/procesoNoId_rojo.png'); }}">
             </div>
             <div id="apDiv66">
                <img id="rojoDecanato" onmouseover="ImgRojoDecanato()" onmouseout="RojoBackDecanato()" src="{{ asset('images/Responsables/decanato.png'); }}">
             </div>
             <div id="apDiv67">
                <img id="rojoComision" onmouseover="ImgRojoComision()" onmouseout="RojoBackComision()" src="{{ asset('images/Responsables/comisionplanificacion.png'); }}">
             </div>
             <div id="apDiv68">
                <img src="{{ asset('images/Responsables/externos.png'); }}">
             </div>

            <!-- Footer --> 

        <center>
				   <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
			</center>
	 </div>

@stop

