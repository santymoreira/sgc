@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesVinculacion.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
    {{ HTML::script('js/FocusVinculacion.js'); }}

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
     	
     		 <div id="apDiv32">
     		 	<img src="{{ asset('images/marketing/vinculacion.png'); }}">
     		 </div>
			
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
                    <a style="cursor:default;" href="../Modales_Macroprocesos/Modales_Vinculacion/Realizar_tutoria_practicas_DOC.php"  rel="floatbox">
                        <img id="afeg03_1" src="{{ asset('images/ProcesosEscuelas/cod_afeg03-01.png'); }}" width="50" height="15">
                    </a>           
            </div> 
            <div id="apDiv106">
                    <a style="cursor:default;" href="../Modales_Macroprocesos/Modales_Vinculacion/Realizar_informe_practicas_DOC.php"  rel="floatbox">
                    	<img id="afeg03_2" src="{{ asset('images/ProcesosEscuelas/cod_afeg03-02.png'); }}" width="50" height="15">
                    </a>    
            </div>  
            <div id="apDiv107">
                    <a style="cursor:default;" href="../Modales_Macroprocesos/Modales_Vinculacion/Hacer_convenios_DOC.php"  rel="floatbox">
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
       		<center>
		   		<p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
			</center>    

    </div>

@stop