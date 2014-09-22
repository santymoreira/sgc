@extends('home.layout')

@section('Different_Styles')
	@parent
  {{ HTML::style('css/Evaluacionfloatbox.css'); }}
  {{ HTML::script('js/Evaluacionfloatbox.js'); $var= Session::get('escuela'); }}
  {{ HTML::style('css/Acciones.css'); }}
  
   

@stop


@section('not_general_styles')
  {{ HTML::style('css/floatbox_1.css'); }}
  {{ HTML::script('js/framebox_1.js'); }}

@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				       		 @if($var == 2)  
                     <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_bsc','BSC'); }}  
                        @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('empresas/empresas_bsc','BSC'); }}  
                        @elseif($var ==4)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzas/finanzas_bsc','BSC'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketing/marketing_bsc','BSC'); }}  
                        @elseif($var ==6)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/transporte_bsc','BSC  '); }}  
                      @endif
               	  @if($var == 2)  
                     <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/perspectivas','Volver'); }}  
                      @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('empresas/perspectivas','Volver'); }}  
                        @elseif($var ==4)
                        <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzas/perspectivas','Volver'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketing/perspectivas','Volver'); }}  
                        @elseif($var ==6)
                       <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/perspectivas','Volver'); }}  
                      @endif
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
                      <div id="apDiv111">
                        <img src="{{ asset('images/contabilidadbsc/OptimiRecu.png') }}" >
              </div>
                @elseif($var ==1)
                     <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/OptimiRecu.png') }}" >
              </div>
                 @elseif($var ==4)
                      <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/OptimiRecu.png') }}" >
              </div>
                 @elseif($var ==5)
                       <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/OptimiRecu.png') }}" >
              </div>
                 @elseif($var ==6)
                       <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/OptimiRecu.png') }}" >
              </div>
                 @endif  


               <div id="apDiv165">
                      <img src="{{ asset('images/objetivosO/OptiRecursos_red.png') }}">
                   </div>
                     <div id="apDiv166">
                        <img src="{{ asset('images/objetivosO/obtener_finan_red.png') }}">
                     </div>
                   <div id="apDiv167">
                      <img src="{{ asset('images/Acciones/PlanOpAnual.png') }}">
                   </div>
                   <div id="apDiv168">
                      <img src="{{ asset('images/Acciones/PlanAnualContra.png') }}">
                   </div>
          <div id="apDiv169">
                      <img src="{{ asset('images/Acciones/ActivosFijos.png') }}">
                   </div>
                  <div id="apDiv170">
                      <img src="{{ asset('images/Acciones/ActivosCirculares.png') }}">
                  </div>
                 <div id="apDiv171">
                    <img src="{{ asset('images/Acciones/Energeticos.png') }}">
                 </div>
                <div id="apDiv172">
                    <img src="{{ asset('images/Acciones/Agua.png') }}">
                </div>
                <div id="apDiv173">
                    <img src="{{ asset('images/Acciones/Telefono.png') }}">
                </div>
                <div id="apDiv174">
                    <img src="{{ asset('images/Acciones/Internet.png') }}">
                </div>
                <div id="apDiv175">
                    <img src="{{ asset('images/Acciones/GastosOperacion.png') }}">
                </div>
        </div>
@stop