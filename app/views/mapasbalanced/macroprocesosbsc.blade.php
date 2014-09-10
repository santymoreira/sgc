@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesPerspectivas.css'); $var=Session::get('escuela'); }}
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio'); }} 
                      @if($var == 1)   
                         <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_bsc','BSC'); }}  
                      @elseif($var ==3)
                         <li class="nivel1"><a class="nivel1" {{ HTML::link('empresas/empresas_bsc','BSC'); }}  
                      @elseif($var ==5)
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzas/finanzas_bsc','BSC'); }}
                      @elseif($var ==6)
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('marketing/marketing_bsc','BSC'); }}
                      @elseif($var ==7)
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/transporte_bsc','BSC'); }}
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
         @if($var == 1)
            <div id="apDiv0"><center><img src="{{ asset('images/contabilidadbsc/contenedor.png') }}"></center></div>
         @elseif($var == 3)
            <div id="apDiv0"><center><img src="{{ asset('images/empresasbsc/contenedor.png') }}"></center></div>
         @elseif($var ==5)
             <div id="apDiv0"><center><img src="{{ asset('images/finanzasbsc/contenedor.png') }}"></center></div>
         @elseif($var ==6)
             <div id="apDiv0"><center><img src="{{ asset('images/marketingbsc/contenedor.png') }}"></center></div>
         @elseif($var ==7)
             <div id="apDiv0"><center><img src="{{ asset('images/transportebsc/contenedor.png') }}"></center></div>
         @endif

      <!-- Perspectivas del Balanced -->
     <div class="cleared"> 
        <div id="apDiv1">
              <img onclick="PotInvestigacion();" id="PotInvestigacion" src="{{ asset('images/perspectivasbsc/potenciar_investigacion.png') }}" style="cursor:pointer;">
              <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAdministrativa.php">
                <div id="apDiv2">
                  <input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/>
                </div> 
              </a>
        </div>
         <div id="apDiv3">
              <img onclick="AcreditarCarr();" id="AcreditarCarr" src="{{ asset('images/perspectivasbsc/acreditarcarr.png') }}" style="cursor:pointer;">
        </div>
        <div id="apDiv5">
              <img onclick="SatisfEstudi();" id="SatisfEstudi" src="{{ asset('images/perspectivasbsc/satisfestudi.png') }}" style="cursor:pointer;">
              <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAdministrativa.php">
                <div id="apDiv6">
                  <input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/>
                </div> 
              </a>
        </div>
        <div id="apDiv7">
              <img onclick="FortalecerAprend();" id="FortalecerAprend" src="{{ asset('images/perspectivasbsc/fortaleceraprend.png') }}" style="cursor:pointer;">
        </div>
         <div id="apDiv9">
              <img onclick="ImpemSgc();" id="ImpemSgc" src="{{ asset('images/perspectivasbsc/impemsgc.png') }}" style="cursor:pointer;">
        </div>
         <div id="apDiv11">
              <img onclick="ImpeProce();" id="ImpeProce" src="{{ asset('images/perspectivasbsc/impeproce.png') }}" style="cursor:pointer;">
              <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAdministrativa.php">
                <div id="apDiv12">
                  <input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/>
                </div> 
              </a>
        </div>
         <div id="apDiv13">
              <img onclick="Potenciar_Innov();" id="Potenciar_Innov" src="{{ asset('images/perspectivasbsc/potenciar_innov.png') }}" style="cursor:pointer;">
        </div>
        <div id="apDiv15">
              <img onclick="ImpleModel();" id="ImpleModel" src="{{ asset('images/perspectivasbsc/implemodel.png') }}" style="cursor:pointer;">
         </div>
         <div id="apDiv17">
              <img onclick="DesarrApoyo();" id="DesarrApoyo" src="{{ asset('images/perspectivasbsc/desarrapoyo.png') }}" style="cursor:pointer;">
        </div>
         <div id="apDiv19">
              <img onclick="ProveeProyec();" id="ProveeProyec" src="{{ asset('images/perspectivasbsc/proveeproyec.png') }}" style="cursor:pointer;">
        </div>
         <div id="apDiv20">
              <img onclick="FortalecerRRHH();" id="FortalecerRRHH" src="{{ asset('images/perspectivasbsc/fortalecerRRHH.png') }}" style="cursor:pointer;">
              <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAdministrativa.php">
                <div id="apDiv21">
                  <input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/>
                </div> 
              </a>  
        </div>
         <div id="apDiv22">
              <img onclick="mejorarclima();" id="mejorarclima" src="{{ asset('images/perspectivasbsc/mejorarclima.png') }}" style="cursor:pointer;">
        </div>
          <div id="apDiv23">
              <img onclick="PromoCoopera();" id="PromoCoopera" src="{{ asset('images/perspectivasbsc/promocoopera.png') }}" style="cursor:pointer;">
        </div>
          <div id="apDiv24">
              <img onclick="OptimiRecursos();" id="OptimiRecursos" src="{{ asset('images/perspectivasbsc/optimirecursos.png') }}" style="cursor:pointer;">
            <a rel="floatbox" class="fbPopup" href="ReportesIndicadores/pChart2.1.4/examples/Contabilidad_Macro_GestionAdministrativa.php">
                <div id="apDiv25">
                  <input type="image" src="{{ asset('images/Utilitarios/chart_bar.png') }}"/>
                </div> 
            </a>    
        </div>
          <div id="apDiv26">
              <img onclick="ObtenerFinanc();" id="ObtenerFinanc" src="{{ asset('images/perspectivasbsc/obtenerfinanc.png') }}" style="cursor:pointer;">
        </div>
      </div>
        <center>
           <p style="font-size:10px;color:#03F; position:relative; bottom:0;" >Copyright © 2014. All Rights Reserved.</p>
        </center>
</div>
 @stop