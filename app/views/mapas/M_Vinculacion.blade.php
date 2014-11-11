@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesVinculacion.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
    {{ HTML::script('js/FocusVinculacion.js'); $var=Session::get('escuela'); }}

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
@section('modificar')
   @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
      <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no" >
        <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a></div>
   @else
    <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no">
      <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
    </a></div>
   @endif
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
     		  	<img src="{{ asset('images/Contabilidad/vinculacion.png'); }}">
     		 </div>
			  @elseif($var ==7)
        <div id="apDiv32">
            <img src="{{ asset('images/distancia/vinculacion.png'); }}">
         </div>
         @elseif($var ==1)
        <div id="apDiv32">
            <img src="{{ asset('images/Empresas/vinculacion.png'); }}">
         </div>
        @elseif($var ==3)
        <div id="apDiv32">
            <img src="{{ asset('images/Exterior/vinculacion.png'); }}">
         </div>
        @elseif($var ==4)
        <div id="apDiv32">
            <img src="{{ asset('images/Finanzas/vinculacion.png'); }}">
         </div>
          @elseif($var ==5)
        <div id="apDiv32">
            <img src="{{ asset('images/Marketing/vinculacion.png'); }}">
         </div>
          @elseif($var ==6)
        <div id="apDiv32">
            <img src="{{ asset('images/Transporte/vinculacion.png'); }}">
         </div>
        @endif
			<!-- Procesos de la Getión de Vinculación -->

			<div id="apDiv95">
          		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-01)/proceso.png'); }}" rel="slideshow1">
                       <img id="afeg031" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg03-01.png'); }}">
                       <a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-01)/diagrama.png'); }}" rel="slideshow1"></a>
                       <a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-01)/indicador.png'); }}" rel="slideshow1"></a>
          		</a>                
      		</div>
      		 <div id="apDiv96">
         		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-02)/proceso.png'); }}" rel="slideshow2">
                       <img id="afeg032" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg03-02.png'); }}">
                  	   <a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-02)/diagrama.png'); }}" rel="slideshow2"></a>
                       <a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-02)/indicador.png'); }}" rel="slideshow2"></a>
          		</a>              
      		</div>
      		<div id="apDiv97">
          		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-03)/proceso.png'); }}" rel="slideshow3">
                       <img id="afeg033" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg03-03.png'); }}" />
                       <a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-03)/diagrama.png'); }}" rel="slideshow3"></a>
                       <a  href="{{ asset('images/FichasProcesos/Fichas(afeg03-03)/indicador.png'); }}" rel="slideshow3"></a>
                </a>                
      		</div>

      		  <!-- Códigos de procesos Gestión de Vinculación  -->   

      		<div id="apDiv105">
                    <a style="cursor:default;" href="../evaluacion/Realizar tutorías de prácticas/Docente/3/{{Session::get('escuela')}}/1/4/1"  rel="floatbox">
                        <img id="afeg03_1" src="{{ asset('images/ProcesosEscuelas/cod_afeg03-01.png'); }}" width="50" height="15">
                    </a>           
            </div> 
            <div id="apDiv106">
                    <a style="cursor:default;" href="../evaluacion/Realizar informes de prácticas/Docente/3/{{Session::get('escuela')}}/2/4/1"  rel="floatbox">
                    	<img id="afeg03_2" src="{{ asset('images/ProcesosEscuelas/cod_afeg03-02.png'); }}" width="50" height="15">
                    </a>    
            </div>  
            <div id="apDiv107">
                    <a style="cursor:default;" href="../evaluacion/Hacer convenios/Docente/3/{{Session::get('escuela')}}/3/4/1"  rel="floatbox">
                        <img id="afeg03_3" src="{{ asset('images/ProcesosEscuelas/cod_afeg03-03.png'); }}" width="50" height="15">
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
     		<div id="apDiv39">
     			<img src="{{ asset('images/MacroprocesosEscuelas/investigacion.png'); }}" width="207" height="66" id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
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
            	<img id="AzulCoordinador" onmouseover="ImgAzulCoordinador()" onmouseout="BackAzulCoordinador()" src="{{ asset('images/Responsables/coordinador.png'); }}">
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
            	<img id="RojoCoordinador" onmouseover="ImgRojoCoordinador()" onmouseout="BackRojoCoordinador()" src="{{ asset('images/Responsables/coordinador.png'); }}">
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