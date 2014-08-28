@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesMacroprocesos.css'); }}
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				             <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
                      <li class="nivel1"><a class="nivel1" {{ HTML::link('empresas/empresas_sgc', 'SGC');}}
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
          <div id="apDiv21"><center><img src="{{ asset('images/empresas/contenedor.png') }}" width="949" height="643"></center></div>
            <div class="cleared"> 
			   <div id="apDiv22">
                    <img onclick="GestionAdmin()" id="gestionadmin" style="cursor:pointer;" src="{{ asset('images/GestionAdmin.png') }}" width="670" height="51">
                    <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAdministrativa.php"><center><input type="image" src="{{ asset('images/chart_bar.png') }}"/></center> </a>
               </div>
               <div id="apDiv23">
                    <img onclick="GestionAcademica();" id="gestionacad" src="{{ asset('images/GestionAcade.png') }}" style="cursor:pointer;" width="670" height="51">
                    <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAcademica.php"><center><input type="image" src="{{ asset('images/chart_bar.png') }}"/></center> </a>
                </div>
                           <div id="apDiv26">
                                <img src="{{ asset('images/docencia.png') }}" width="207" height="66" id="docencia" style="cursor:pointer;"  onclick="Docencia();">
                                    <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Docencia.php"><center><input type="image" src="{{ asset('images/chart_bar.png') }}"/></center> </a>  
                           </div>
                           <div id="apDiv27">
                               <img src="{{ asset('images/investigacion.png') }}" width="207" height="66"  id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
                                   <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Investigacion.php"><center><input type="image" src="{{ asset('images/chart_bar.png') }}"/></center> </a>
                           </div>
                           <div id="apDiv28">
                           	 <img src="{{ asset('images/vinculacion.png') }}" width="207" height="66"  id="vinculacion" style="cursor:pointer;"  onclick="Vinculacion();">
                                     <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Vinculacion.php"><center><input type="image" src="{{ asset('images/chart_bar.png') }}"/></center> </a>
                           </div>
          <div id="apDiv29"> 
                           		<img onclick="Asistencia();" id="asistencia" style="cursor:pointer;" src="{{ asset('images/asistencia.png') }}" width="670" height="51" /> 
                                        <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Asistencia.php"><center><input type="image" src="{{ asset('images/chart_bar.png') }}"/></center> </a>
          </div>
                            <div id="apDiv30">
                           		<img onclick="Mantenimiento();" id="mantenimiento" style="cursor:pointer;" src="{{ asset('images/mantenimiento.png') }}" width="670" height="51" /> 
                                        <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Mantenimiento.php"><center><input type="image" src="{{ asset('images/chart_bar.png') }}"/></center> </a>
                           </div>
				<center>
				   <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
				</center>
			</div>	
        </div>
@stop