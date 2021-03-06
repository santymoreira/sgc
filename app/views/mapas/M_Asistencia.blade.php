@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesAsistencia.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
    {{ HTML::script('js/FocusAsistencia.js'); $var=Session::get('escuela'); }}

@stop

@section('not_general_styles')
  {{ HTML::style('css/floatbox_1.css'); }}
  {{ HTML::script('js/framebox_1.js'); }}

@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				       		<li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_sgc', 'SGC'); }} 
                    <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a>
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
    
      @if($var == 2)
		  	<div id="apDiv32">
          <img src="{{ asset('images/Contabilidad/asistencia.png') }}">
        </div>
      @elseif($var ==7)
        <div id="apDiv32">
          <img src="{{ asset('images/distancia/asistencia.png') }}">
        </div>
       @elseif($var ==1)
        <div id="apDiv32">
          <img src="{{ asset('images/Empresas/asistencia.png') }}">
        </div>
      @elseif($var ==3)
        <div id="apDiv32">
          <img src="{{ asset('images/Exterior/asistencia.png') }}">
        </div>
       @elseif($var ==4)
        <div id="apDiv32">
          <img src="{{ asset('images/Finanzas/asistencia.png') }}">
        </div>
       @elseif($var ==5)
        <div id="apDiv32">
          <img src="{{ asset('images/Marketing/asistencia.png') }}">
        </div>
        @elseif($var ==6)
        <div id="apDiv32">
          <img src="{{ asset('images/Transporte/asistencia.png') }}">
        </div>
      @endif
    
		
			<!-- Procesos de la Asistencia --> 

			<div id="apDiv108">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-01)/proceso.png') }}" rel="slideshow1">
                    <img id="afeg061" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-01.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-01)/diagrama.png') }}" rel="slideshow1"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-01)/indicador.png') }}" rel="slideshow1"></a>
           		</a>        
       		</div>
       		<div id="apDiv109">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-02)/proceso.png') }}" rel="slideshow2">
                    <img id="afeg062" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-02.png') }}">
                	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-02)/diagrama.png') }}" rel="slideshow2"></a>
                  	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-02)/indicador.png') }}" rel="slideshow2"></a>
           		</a>           
       		</div>
       		 <div id="apDiv110">
       			<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-03)/proceso.png') }}" rel="slideshow3">
                    <img id="afeg063" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-03.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-03)/diagrama.png') }}" rel="slideshow3"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-03)/indicador.png') }}" rel="slideshow3"></a>
          		</a>        
   		    </div>	
   		    <div id="apDiv111">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-04)/proceso.png') }}" rel="slideshow4">
                    <img id="afeg064" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-04.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-04)/diagrama.png') }}" rel="slideshow4"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-04)/indicador.png') }}" rel="slideshow4"></a>
           		</a>               
       		</div>
       		<div id="apDiv112">
          		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-05)/proceso.png') }}" rel="slideshow5">
                    <img id="afeg065" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-05.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-05)/diagrama1.png') }}" rel="slideshow5"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-05)/diagrama2.png') }}" rel="slideshow5"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-05)/indicador.png') }}" rel="slideshow5"></a>
           		</a>            
       		</div>
       		<div id="apDiv115">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-06)/proceso.png') }}" rel="slideshow6">
                    <img id="afeg066" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-06.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-06)/diagrama.png') }}" rel="slideshow6"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-06)/indicador.png') }}" rel="slideshow6"></a>
           		</a>                   
       		</div>
       		<div id="apDiv116">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-07)/proceso.png') }}" rel="slideshow7">
                    <img id="afeg067" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-07.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-07)/diagrama1.png') }}" rel="slideshow7"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-07)/diagrama2.png') }}" rel="slideshow7"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-07)/indicador.png') }}" rel="slideshow7"></a>
            	</a>                 
       		</div>
       	    <div id="apDiv129">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-08)/proceso.png') }}" rel="slideshow8">
                    <img id="afeg068" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-08.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-08)/diagrama.png') }}" rel="slideshow8"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-01)/indicador.png') }}" rel="slideshow8"></a>
             	</a>            
       		</div>
       		<div id="apDiv130">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-09)/proceso.png') }}" rel="slideshow9">
                    <img id="afeg069" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-09.png') }}">
                	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-09)/diagrama.png') }}" rel="slideshow9"></a>
                 	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-09)/indicador.png') }}" rel="slideshow9"></a>
          		</a>               
       		</div>
       		<div id="apDiv131">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-10)/proceso.png') }}" rel="slideshow10">
                    <img id="afeg0610" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-10.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-10)/diagrama.png') }}" rel="slideshow10"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-10)/indicador.png') }}" rel="slideshow10"></a>
          		</a>              
       		</div>
       		<div id="apDiv132">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-11)/proceso.png') }}" rel="slideshow11">
                    <img id="afeg0611" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-11.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-11)/diagrama.png') }}" rel="slideshow11"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-11)/indicador.png') }}" rel="slideshow11"></a>
           		</a>            
       		</div>
       		 <div id="apDiv133">
         	    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-12)/proceso.png') }}" rel="slideshow12">
                    <img id="afeg0612" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-12.png') }}">
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-12)/diagrama.png') }}" rel="slideshow12"></a>
                    <a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-12)/indicador.png') }}" rel="slideshow12"></a>
     		    </a>                
       		</div>
       		<div id="apDiv147">
           		<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-13)/proceso.png') }}" rel="slideshow13">
                    <img id="afeg0613" style="cursor:pointer;" src="{{ asset('images/ProcesosEscuelas/afeg06-13.png') }}">
                 	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-13)/diagrama.png') }}" rel="slideshow13">
                 	<a  href="{{ asset('images/FichasProcesos/Fichas(afeg06-13)/indicador.png') }}" rel="slideshow13">
           		</a>          
     	    </div>	

     	    <!-- Códigos de procesos Gestión Administrativa -->   

     	    <div id="apDiv134">
           		<a style="cursor:default;" href="../evaluacion/Marcar hora de entrada/Secretaria/6/{{Session::get('escuela')}}/1/2/1"  rel="floatbox">
                    <img src="{{ asset('images/ProcesosEscuelas/cod_afeg06-01.png') }}" width="56" height="13" id="afeg06_1">
           		</a>             
       		</div>
       		<div id="apDiv135">
           		<a style="cursor:default;" href="../evaluacion/Iniciar jornada académica/Secretaria/6/{{Session::get('escuela')}}/2/2/1"  rel="floatbox">
                	<img id="afeg06_2" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-02.png') }}" width="56" height="13">
           		</a>         
       		</div>
       		<div id="apDiv136">
           		<a style="cursor:default;" href="../evaluacion/Marcar hora de salida/Secretaria/6/{{Session::get('escuela')}}/3/2/1"  rel="floatbox">
           			<img id="afeg06_3" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-03.png') }}" width="56" height="13">
                </a>              
       		</div>
    		<div id="apDiv137">
           		<a style="cursor:default;" href="../evaluacion/Realizar un nuevo ingreso/Secretaria/6/{{Session::get('escuela')}}/4/2/2"  rel="floatbox">
                    <img id="afeg06_4" width="51" height="12" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-04.png') }}">
           		</a>              
       		</div>
       		<div id="apDiv138">
           		<a style="cursor:default;" href="../evaluacion/Realizar auditorías académicas/Secretaria/6/{{Session::get('escuela')}}/5/2/1"  rel="floatbox">
                	<img id="afeg06_5" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-05.png') }}" width="56" height="13">
           		</a>                   
       		</div> 
       		<div id="apDiv139">
           		<a style="cursor:default;" href="../evaluacion/Instalar defensa de tesis/Secretaria/6/{{Session::get('escuela')}}/6/2/2"  rel="floatbox">
                	 <img id="afeg06_6" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-06.png') }}" width="56" height="13">
          		</a>            
       		</div>
       		<div id="apDiv140">
           		<a style="cursor:default;" href="../evaluacion/Realizar los trámites para la graduación/Secretaria/6/{{Session::get('escuela')}}/7/2/2"  rel="floatbox">
            		<img id="afeg06_7" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-07.png') }}" width="56" height="13">
                </a>               
       		</div>
       		<div id="apDiv141">
         		<a style="cursor:default;" href="../evaluacion/Realizar oficios/Secretaria/6/{{Session::get('escuela')}}/8/2/1"  rel="floatbox">
           			<img id="afeg06_8" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-08.png') }}" width="56" height="13">
                </a>              
       		</div>
       		<div id="apDiv142">
           		<a style="cursor:default;" href="../evaluacion/Realizar certificados/Secretaria/6/{{Session::get('escuela')}}/9/2/1"  rel="floatbox">
            		<img id="afeg06_9" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-09.png') }}" width="56" height="13">
              	</a>                  
        	</div> 
        	<div id="apDiv143">
           		<a style="cursor:default;" href="../evaluacion/Realizar informes mensuales de horas dictadas/Secretaria/6/{{Session::get('escuela')}}/10/2/1"  rel="floatbox">
           			<img id="afeg06_10" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-10.png') }}" width="56" height="13">
              	</a>                
       		</div>
       		<div id="apDiv145">
           		<a style="cursor:default;" href="../evaluacion/Participar en la elaboración de horarios/Secretaria/6/{{Session::get('escuela')}}/11/2/1"  rel="floatbox">
         			<img id="afeg06_11" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-11.png') }}" width="56" height="13">
          		</a>         
       		</div> 
       		<div id="apDiv146">
        		<a style="cursor:default;" href="../evaluacion/Recibir documentos/Secretaria/6/{{Session::get('escuela')}}/12/2/1"  rel="floatbox">
          			<img id="afeg06_12" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-12.png') }}" width="56" height="13">
              	</a>                
      		</div>
      		<div id="apDiv148">
           		<a style="cursor:default;" href="../evaluacion/Recibir actas de defensa de tesis/Secretaria/6/{{Session::get('escuela')}}/13/2/1"  rel="floatbox">
         			<img id="afeg06_13" src="{{ asset('images/ProcesosEscuelas/cod_afeg06-13.png') }}" width="56" height="13">
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
       		<div id="apDiv39">	
       			<img src="{{ asset('images/MacroprocesosEscuelas/investigacion.png') }}" width="207" height="66" id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
       		</div>
       		<div id="apDiv74">
       			<img src="{{ asset('images/MacroprocesosEscuelas/vinculacion.png') }}" width="207" height="66" id="vinculacion" style="cursor:pointer;"  onclick="Vinculacion();">
       		</div>
         	<div id="apDiv76">
         		<img src="{{ asset('images/MacroprocesosEscuelas/mantenimiento.png') }}" id="mantenimiento" width="627" height="50" style="cursor:pointer;"  onclick="Mantenimiento();">
         	</div>
   	
       	  <!-- Botones de responsables entradas(azul) Salidas(rojo) -->

       	    <div id="apDiv117">
       	    	<img src="{{ asset('images/Responsables/externos_azul.png') }}">
       	    </div>
      		<div id="apDiv118">
      			<img id="ReglamentoAc" onmouseover="ImgAzulReglamentoAc()" onmouseout="BackAzulReglamentoAc()" src="{{ asset('images/Responsables/reglamentoAcademico.png') }}">
      		</div>
      		<div id="apDiv119">
      			<img id="ReglamentoInt" onmouseover="ImgAzulReglamentoInt()" onmouseout="BackAzulReglamentoInt()" src="{{ asset('images/Responsables/reglamento8.png') }}">
      		</div>
      		<div id="apDiv120">
      			<img id="NoIdExt" onmouseover="ImgAzulNoIdExt()" onmouseout="BackAzulNoIdExt()" src="{{ asset('images/Responsables/procesoNoId_externo.png') }}" >
      		</div>
      		<div id="apDiv121">
      			<img src="{{ asset('images/Responsables/internos_rojo.png') }}">
      		</div>
      		<div id="apDiv122">
      			<img id="NoIdInt" onmouseover="ImgAzulNoIdInt()" onmouseout="BackAzulNoIdInt()"  src="{{ asset('images/Responsables/procesoNoId_interno.png') }}">
      		</div>
      		<div id="apDiv123">
      			<img id="Regimen" onmouseover="ImgRojoRegimen()" onmouseout="BackRojoRegimen()"   src="{{ asset('images/Responsables/reglamentoAcademico.png') }}">
      		</div>
      		<div id="apDiv124">
      			<img id="Reglamento" onmouseover="ImgRojoReglamento()" onmouseout="BackRojoReglamento()"   src="{{ asset('images/Responsables/reglamento4.png') }}">
      		</div>
      		<div id="apDiv125">
      			<img id="RojoNoIdInt" onmouseover="ImgRojoNoIdInt()" onmouseout="BackRojoNoIdInt()"   src="{{ asset('images/Responsables/procesoNoId_interno.png') }}">
      		</div>
      		<div id="apDiv127">
      			<img src="{{ asset('images/Responsables/procesoNoId_externo.png') }}">
      		</div>
      		<div id="apDiv128">
      			<img id="RojoCIADES" onmouseover="ImgRojoCEADESA()" onmouseout="BackRojoCEADESA()"   src="{{ asset('images/Responsables/ciades.png') }}">
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