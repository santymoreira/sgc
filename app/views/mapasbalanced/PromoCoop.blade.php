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
                        <img src="{{ asset('images/contabilidadbsc/PromoCoop.png') }}" >
              </div>
                @elseif($var ==1)
                       <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/PromoCoop.png') }}" >
              </div>
                 @elseif($var ==4)
                       <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/PromoCoop.png') }}" >
              </div>
                 @elseif($var ==5)
                        <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/PromoCoop.png') }}" >
              </div>
                 @elseif($var ==6)
                          <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/PromoCoop.png') }}" >
              </div>
                 @endif  

               <div id="apDiv157">
                        <img src="{{ asset('images/objetivosO/MejorarClima_red.png') }}">
                    </div>
                    <div id="apDiv158">
                        <img src="{{ asset('images/objetivosO/PromoCoope_red.png') }}">
                    </div>
                    <div id="apDiv150">
                        <img src="{{ asset('images/ObjetivosO/FortaRRHH_red.png') }}">
                    </div>
                      <div id="apDiv161">
                       <a id="1" href="{{ asset('images/descripcion/Compromiso.png'); }}" rel="slideshow1">
                           <img src="{{ asset('images/Acciones/Compromiso.png') }}" style="cursor:pointer;">
                      </a>
                   </div>
                  <div id="apDiv162">
                      <a id="2" href="{{ asset('images/descripcion/Liderazgo.png'); }}" rel="slideshow2">
                          <img src="{{ asset('images/Acciones/Liderazgo.png') }}" style="cursor:pointer;">
                      </a>
                  </div>
                  <div id="apDiv163">
                    <a id="3" href="{{ asset('images/descripcion/MotivPersonal.png'); }}" rel="slideshow3">
                       <img src="{{ asset('images/Acciones/MotivPersonal.png') }}" style="cursor:pointer;">
                    </a>
                  </div>
                  <div id="apDiv164">
                     <a id="4" href="{{ asset('images/descripcion/SatisLab.png'); }}" rel="slideshow4">
                          <img src="{{ asset('images/Acciones/SatisLab.png') }}" style="cursor:pointer;">
                      </a>
                  </div>

                  <!-- Evaluacion Acciones -->

                  <div id="apDiv223">
                        <img src="{{ asset('images/semaforo/rojo.png') }}">  
                  </div> 
                  <div id="apDiv224">
                     <img src="{{ asset('images/semaforo/rojo.png') }}">  
                  </div>  
                  <div id="apDiv225">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                  </div> 
                 <div id="apDiv226">
                     <img src="{{ asset('images/semaforo/rojo.png') }}">  
                 </div> 

            </div>
  @stop