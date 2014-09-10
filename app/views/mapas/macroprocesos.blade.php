@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesMacroprocesos.css'); $var=Session::get('escuela'); }}
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio'); }} 
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
            <div id="apDiv21"><center><img src="{{ asset('images/contabilidad/contenedor.png') }}"></center></div>
          @elseif($var ==7)
            <div id="apDiv21"><center><img src="{{ asset('images/distancia/contenedor.png') }}"></center></div>
          @elseif($var ==1)
            <div id="apDiv21"><center><img src="{{ asset('images/empresas/contenedor.png') }}"></center></div>
           @elseif($var ==3)
            <div id="apDiv21"><center><img src="{{ asset('images/exterior/contenedor.png') }}"></center></div>  
          @elseif($var == 4)
            <div id="apDiv21"><center><img src="{{ asset('images/finanzas/contenedor.png') }}"></center></div> 
           @elseif($var ==5)
            <div id="apDiv21"><center><img src="{{ asset('images/marketing/contenedor.png') }}"></center></div> 
           @elseif($var ==6)
            <div id="apDiv21"><center><img src="{{ asset('images/transporte/contenedor.png') }}"></center></div>  
        @endif         
        

            <div class="cleared"> 
			   <div id="apDiv22">
                    <img onclick="GestionAdmin();" id="gestionadmin" src="{{ asset('images/MacroprocesosEscuelas/GestionAdmin.png') }}" style="cursor:pointer;" width="670" height="51">
                    <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAdministrativa.php"><center><input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/></center> </a>
               </div>
               <div id="apDiv23">
                    <img onclick="GestionAcademica();" id="gestionacad" src="{{ asset('images/MacroprocesosEscuelas/GestionAcade.png'); }}" style="cursor:pointer;" width="670" height="51">
                    <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAcademica.php"><center><input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/></center> </a>
                </div>
                           <div id="apDiv26">
                                <img src="{{ asset('images/MacroprocesosEscuelas/docencia.png'); }}" width="207" height="66" id="docencia" style="cursor:pointer;"  onclick="Docencia();">
                                    <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Docencia.php"><center><input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/></center> </a>  
                           </div>
                           <div id="apDiv27">
                               <img src="{{ asset('images/MacroprocesosEscuelas/investigacion.png'); }}" width="207" height="66"  id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
                                   <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Investigacion.php"><center><input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/></center> </a>
                           </div>
                           <div id="apDiv28">
                           	 <img src="{{ asset('images/MacroprocesosEscuelas/vinculacion.png'); }}" width="207" height="66"  id="vinculacion" style="cursor:pointer;"  onclick="Vinculacion();">
                                     <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Vinculacion.php"><center><input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/></center> </a>
                           </div>
          <div id="apDiv29"> 
                           		<img onclick="Asistencia();" id="asistencia" style="cursor:pointer;" src="{{ asset('images/MacroprocesosEscuelas/asistencia.png'); }}" width="670" height="51" /> 
                                        <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Asistencia.php"><center><input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/></center> </a>
          </div>
                            <div id="apDiv30">
                           		<img onclick="Mantenimiento();" id="mantenimiento" style="cursor:pointer;" src="{{ asset('images/MacroprocesosEscuelas/mantenimiento.png'); }}" width="670" height="51" /> 
                                        <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_Mantenimiento.php"><center><input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/></center> </a>
                           </div>
				<center>
				   <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
				</center>
			</div>	
        </div>
@stop