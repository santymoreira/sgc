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
                        <img src="{{ asset('images/marketingbsc/FortaCapRRHH.png') }}" >
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
                    <div id="apDiv151">
                        <img src="{{ asset('images/Acciones/RelaMsCDoc.png') }}">
                    </div>
                    <div id="apDiv152">
                        <img src="{{ asset('images/Acciones/RelaPhDDoc.png') }}">
                    </div>
                    <div id="apDiv153">
                        <img src="{{ asset('images/Acciones/nCapDoc.png') }}">
                    </div>
                    <div id="apDiv154">
                        <img src="{{ asset('images/Acciones/MsCCarrera.png') }}">
                    </div>
                    <div id="apDiv155">
                        <img src="{{ asset('images/Acciones/TiempoCompleto.png') }}">
                    </div>
                    <div id="apDiv156">
                        <img src="{{ asset('images/Acciones/EvalDoc.png') }}">
                    </div>

        </div>
@stop