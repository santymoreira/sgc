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
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzas/finanzas_bscc','BSC'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketing/marketing_bsc','BSC'); }}  
                        @elseif($var ==6)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/transporte_bsc','BSC  '); }}  
                      @endif
               		<li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/perspectivas','Volver'); }}  
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
               <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/PromoCoop.png') }}" >
              </div>
               <div id="apDiv157">
                        <img src="{{ asset('images/ObjetivosO/MejorarClima_red.png') }}">
                    </div>
                    <div id="apDiv158">
                        <img src="{{ asset('images/ObjetivosO/PromoCoope_red.png') }}">
                    </div>
                    <div id="apDiv150">
                        <img src="{{ asset('images/ObjetivosO/FortaRRHH_red.png') }}">
                    </div>
                      <div id="apDiv161">
                      <img src="{{ asset('images/Acciones/Compromiso.png') }}">
                   </div>
                  <div id="apDiv162">
                      <img src="{{ asset('images/Acciones/Liderazgo.png') }}">
                  </div>
                  <div id="apDiv163">
                      <img src="{{ asset('images/Acciones/MotivPersonal.png') }}">
                  </div>
                  <div id="apDiv164">
                      <img src="{{ asset('images/Acciones/SatisLab.png') }}">
                  </div>
            </div>
  @stop