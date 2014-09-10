@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesMantenimiento.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
    {{ HTML::script('js/FocusMantenimiento.js'); $var=Session::get('escuela'); }}

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
     	
            @if($var == 1)
     		 <div id="apDiv32">
     		 	<img src="{{ asset('images/contabilidad/mantenimiento.png') }}">
     		 </div>
            @elseif($var == 2)
            <div id="apDiv32">
                <img src="{{ asset('images/distancia/mantenimiento.png') }}">
             </div>
              @elseif($var == 3)
            <div id="apDiv32">
                <img src="{{ asset('images/empresas/mantenimiento.png') }}">
             </div>
             @elseif($var == 4)
            <div id="apDiv32">
                <img src="{{ asset('images/exterior/mantenimiento.png') }}">
             </div>
              @elseif($var == 5)
            <div id="apDiv32">
                <img src="{{ asset('images/finanzas/mantenimiento.png') }}">
             </div>
               @elseif($var == 6)
            <div id="apDiv32">
                <img src="{{ asset('images/marketing/mantenimiento.png') }}">
             </div>
               @elseif($var == 7)
            <div id="apDiv32">
                <img src="{{ asset('images/transporte/mantenimiento.png') }}">
             </div>
            @endif   

			<!-- Procesos de Mantenimiento --> 

		<div id="apDiv110">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-01)/proceso.png') }}" rel="slideshow1">
                <img style="cursor:pointer;" id="afeg071" src="{{ asset('images/ProcesosEscuelas/afeg07-01.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-01)/diagrama.png') }}" rel="slideshow1"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-01)/indicador.png') }}" rel="slideshow1"></a>
         	</a>          
     	</div>
     	<div id="apDiv112">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-02)/proceso.png') }}" rel="slideshow2">
                <img style="cursor:pointer;" id="afeg072" src="{{ asset('images/ProcesosEscuelas/afeg07-02.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-02)/diagrama.png') }}" rel="slideshow2"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-02)/indicador.png') }}" rel="slideshow2"></a>
        	</a>            
     	</div>
     	<div id="apDiv113">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-03)/proceso.png') }}" rel="slideshow3">
                <img style="cursor:pointer;" id="afeg073" src="{{ asset('images/ProcesosEscuelas/afeg07-03.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-03)/diagrama.png') }}" rel="slideshow3"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-03)/indicador.png') }}" rel="slideshow3"></a>
        	</a>          
     	</div>
     	<div id="apDiv115">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-04)/proceso.png') }}" rel="slideshow4">
                <img style="cursor:pointer;" id="afeg074" src="{{ asset('images/ProcesosEscuelas/afeg07-04.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-04)/diagrama.png') }}" rel="slideshow4"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-04)/indicador.png') }}" rel="slideshow4"></a>
        	</a>            
     	</div>
     	<div id="apDiv116">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-05)/proceso.png') }}" rel="slideshow5">
                <img style="cursor:pointer;" id="afeg075" src="{{ asset('images/ProcesosEscuelas/afeg07-05.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-05)/diagrama.png') }}" rel="slideshow5"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-05)/indicador.png') }}" rel="slideshow5"></a>
            </a>            
     	</div>
     	 <div id="apDiv117">
         	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-06)/proceso.png') }}" rel="slideshow6">
                <img style="cursor:pointer;" id="afeg076" src="{{ asset('images/ProcesosEscuelas/afeg07-06.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-06)/diagrama.png') }}" rel="slideshow6"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-06)/indicador.png') }}" rel="slideshow6"></a>
         	</a>                   
     	</div>
     	 <div id="apDiv118">
         	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-07)/proceso.png') }}" rel="slideshow7">
                <img style="cursor:pointer;" id="afeg077" src="{{ asset('images/ProcesosEscuelas/afeg07-07.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-07)/diagrama.png') }}" rel="slideshow7"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-07)/indicador.png') }}" rel="slideshow7"></a>
        	</a>                
    	</div>
    	<div id="apDiv119">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-08)/proceso.png') }}" rel="slideshow8">
                <img style="cursor:pointer;" id="afeg078" src="{{ asset('images/ProcesosEscuelas/afeg07-08.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-08)/diagrama.png') }}" rel="slideshow8"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-08)/indicador.png') }}" rel="slideshow8"></a>
     	</div>
     	<div id="apDiv120">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-09)/proceso.png') }}" rel="slideshow9">
                <img style="cursor:pointer;" id="afeg079" src="{{ asset('images/ProcesosEscuelas/afeg07-09.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-09)/diagrama.png') }}" rel="slideshow9">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-09)/indicador.png') }}" rel="slideshow9">
        	</a> 
        </div>	
        <div id="apDiv121">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-10)/proceso.png') }}" rel="slideshow10">
                <img style="cursor:pointer;" id="afeg0710" src="{{ asset('images/ProcesosEscuelas/afeg07-10.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-10)/diagrama.png') }}" rel="slideshow10"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-10)/indicador.png') }}" rel="slideshow10"></a>
         	</a>        
     	</div>
     	<div id="apDiv122">
        	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-11)/proceso.png') }}" rel="slideshow11">
                <img style="cursor:pointer;" id="afeg0711" src="{{ asset('images/ProcesosEscuelas/afeg07-11.png') }}">
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-11)/diagrama.png') }}" rel="slideshow11"></a>
                <a  href="{{ asset('images/FichasProcesos/Fichas(afeg07-11)/indicador.png') }}" rel="slideshow11"></a>
        	</a>    
    	</div> 

    	<!-- Códigos de procesos de Mantenimiento -->   

    	<div id="apDiv123">
            <a style="cursor:default;" href="../evaluacion/Abrir modulares/Conserje/7/{{Session::get('escuela')}}/1/3/1"  rel="floatbox">
                <img id="afeg07_1" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-01.png') }}" width="51" height="12">
            </a>            
     	</div>
     	<div id="apDiv124">
        	<a style="cursor:default;" href="../evaluacion/Hacer firmar la asistencia docente/Conserje/7/{{Session::get('escuela')}}/2/3/1"  rel="floatbox">
            	<img id="afeg07_2"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-02.png') }}">
      		</a>           
     	</div>
     	<div id="apDiv125">
        	<a style="cursor:default;" href="../evaluacion/Hacer firmar convocatorias/Conserje/7/{{Session::get('escuela')}}/3/3/1"  rel="floatbox">
                <img id="afeg07_3"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-03.png') }}">
         	</a>              
     	</div>
     	<div id="apDiv126">
        	<a style="cursor:default;" href="../evaluacion/Limpiar modulares de la escuela/Conserje/7/{{Session::get('escuela')}}/4/3/1"  rel="floatbox">
                <img id="afeg07_4"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-04.png') }}">
         	</a>          
     	</div>
     	<div id="apDiv127">
        	<a style="cursor:default;" href="../evaluacion/Limpiar oficinas de la Dirección de Escuela/Conserje/7/{{Session::get('escuela')}}/5/3/1"  rel="floatbox">
                <img id="afeg07_5"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-05.png') }}">
        	</a>              
     	</div> 
     	<div id="apDiv128">
        	<a style="cursor:default;" href="../evaluacion/Limpiar areas verdes/Conserje/7/{{Session::get('escuela')}}/6/3/1"  rel="floatbox">
                <img id="afeg07_6"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-06.png') }}">
         	</a>          
     	</div>
     	<div id="apDiv129">
        	<a style="cursor:default;" href="../evaluacion/Botar basura/Conserje/7/{{Session::get('escuela')}}/7/3/1"  rel="floatbox">
                <img id="afeg07_7"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-07.png') }}">
         	</a>           
     	</div>
     	<div id="apDiv130">
        	<a style="cursor:default;" href="../evaluacion/Marcar la hora de entrada/Conserje/7/{{Session::get('escuela')}}/8/3/1"  rel="floatbox">
                <img id="afeg07_8"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-08.png') }}">
        	</a>             
     	</div>
     	<div id="apDiv131">
        	<a style="cursor:default;" href="../evaluacion/Marcar la hora de salida/Conserje/7/{{Session::get('escuela')}}/9/3/1"  rel="floatbox">
                <img id="afeg07_9"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-09.png') }}">
        	</a>             
     	</div>
     	<div id="apDiv132">
        	<a style="cursor:default;" href="../evaluacion/Realizar actividades adicionales/Conserje/7/{{Session::get('escuela')}}/10/3/1"  rel="floatbox">
                <img  id="afeg07_10"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-10.png') }}">
            </a>              
     	</div>
     	<div id="apDiv133">
        	<a style="cursor:default;" href="../evaluacion/Limpiar sanitario de la dirección de la ICA/Conserje/7/{{Session::get('escuela')}}/11/3/1"  rel="floatbox">
                <img id="afeg07_11"  width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg07-11.png') }}">
         	</a>                
     	</div>

     	<!-- Macroprocesos de la Escuela -->  

     	<div id="apDiv43">
     		<img src="{{ asset('images/MacroprocesosEscuelas/GestionAdmin.png') }}" id="gestionadmin" style="cursor:pointer;" width="630" height="47" onclick="GestionAdmin();">
     	</div>
        <div id="apDiv87">
        	<img src="{{ asset('images/MacroprocesosEscuelas/GestionAcade.png') }}" id="gestionacad" style="cursor:pointer;" width="629" height="47" onclick="GestionAcademica();">
        </div>
        <div id="apDiv38">
        	<img src="{{ asset('images/MacroprocesosEscuelas/docencia.png') }}" width="207" height="66" id="docencia" style="cursor:pointer;"  onclick="Docencia();">
        </div>
        <div id="apDiv108">
        	<img src="{{ asset('images/MacroprocesosEscuelas/investigacion.png') }}" width="207" height="66" id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
        </div>
        <div id="apDiv109">
        	<img src="{{ asset('images/MacroprocesosEscuelas/vinculacion.png') }}" id="vinculacion" width="207" height="66" style="cursor:pointer;"  onclick="Vinculacion();">
        </div>
        <div id="apDiv36">
        	<img src="{{ asset('images/MacroprocesosEscuelas/asistencia.png') }}" id="asistencia" width="643" height="51" style="cursor:pointer;"  onclick="Asistencia();">
        </div>

     	<!-- Botones de responsables entradas(azul) Salidas(rojo) -->
    
    	<div id="apDiv134">
    		<img src="{{ asset('images/Responsables/externos_azul.png') }}">
    	</div>
   		<div id="apDiv135">
   			<img id="AzulEstatuto" onmouseover="ImgAzulEstatuto()" onmouseout="BackAzulEstatuto()" src="{{ asset('images/Responsables/estatutoazul.png') }}">
   		</div>
    	<div id="apDiv136">
    		<img id="AzulNoIdEx" onmouseover="ImgAzulNoIdExt()" onmouseout="BackAzulNoIdExt()" src="{{ asset('images/Responsables/procesoNoId.png') }}">
    	</div>
    	<div id="apDiv137">
    		<img id="AzulReglamento" onmouseover="ImgAzulReglamento()" onmouseout="BackAzulReglamento()" src="{{ asset('images/Responsables/reglamento4.png') }}">
    	</div>
     	<div id="apDiv139">
     		<img src="{{ asset('images/Responsables/internos_rojo.png') }}">
     	</div>
     	<div id="apDiv138">
     		<img id="AzulNoIdInt" onmouseover="ImgAzulNoIdInt()" onmouseout="BackAzulNoIdInt()" src="{{ asset('images/Responsables/procesoNoId_rojo.png') }}">
     	</div>
     	<div id="apDiv140">
     		<img src="{{ asset('images/Responsables/externos_dere.png') }}">
     	</div>
     	<div id="apDiv141">
     		<img id="RojoReglemento" onmouseover="ImgRojoReglamento()" onmouseout="BackRojoReglamento()" src="{{ asset('images/Responsables/reglamento4.png') }}">
     	</div>
     	<div id="apDiv142">
     		<img id="RojoNoId" onmouseover="ImgRojoNoId()" onmouseout="BackRojoNoId()" src="{{ asset('images/Responsables/procesoNoId_rojo.png') }}">
     	</div>
     	<div id="apDiv143">
     		<img src="{{ asset('images/Responsables/internos_rojo.png') }}">
     	</div>

     	<!-- Footer -->  
		    
		<center>
		     <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
  	    </center>	

     </div>
@stop