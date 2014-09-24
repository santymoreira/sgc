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
                        <img src="{{ asset('images/contabilidadbsc/PotenInnov.png') }}" >
              </div>
                @elseif($var ==1)
                      <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/PotenInnov.png') }}" >
              </div>
                 @elseif($var ==4)
                      <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/PotenInnov.png') }}" >
              </div>
                 @elseif($var ==5)
                        <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/PotenInnov.png') }}" >
              </div>
                 @elseif($var ==6)
                       <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/PotenInnov.png') }}" >
              </div>
                 @endif  


              <div id="apDiv123">
                      <img src="{{ asset('images/objetivosO/FortInterA_red.png') }}">
                   </div>
                   <div id="apDiv124">
                      <img src="{{ asset('images/objetivosO/ImpleSgc_red.png') }}">
                   </div>
                   <div id="apDiv125">
                      <img src="{{ asset('images/objetivosO/ImpleGproce_red.png') }}">
                   </div>
                   <div id="apDiv126">
                      <img src="{{ asset('images/objetivosO/PoteInnov_red.png') }}">
                   </div>
                   <div id="apDiv127">
                      <img src="{{ asset('images/objetivosO/ImpleMcontemp_red.png') }}">
                   </div>
                   <div id="apDiv128">
                      <img src="{{ asset('images/objetivosO/DesaCent_red.png') }}">
                   </div>
                   <div id="apDiv129">
                      <img src="{{ asset('images/objetivosO/PromProyec_red.png') }}">  
                   </div>
                    <div id="apDiv140">
                      <img src="{{ asset('images/Acciones/RelacInves_nDoc.png') }}" style="cursor:pointer;">
                   </div>
                   <div id="apDiv141">
                      <img src="{{ asset('images/Acciones/RelaInves_nEstuInvo.png') }}" style="cursor:pointer;">
                   </div>

                   <!-- Evaluacion Acciones -->

                    <div id="apDiv219">
                        <img src="{{ asset('images/semaforo/rojo.png') }}">  
                   </div>
                   <div id="apDiv220">
                       <img src="{{ asset('images/semaforo/rojo.png') }}">  
                   </div>
          </div>
@stop