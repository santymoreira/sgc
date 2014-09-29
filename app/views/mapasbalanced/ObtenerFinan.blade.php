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
                        <img src="{{ asset('images/contabilidadbsc/obteFinan.png') }}" >
              </div>
                @elseif($var ==1)
                     <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/obteFinan.png') }}" >
              </div>
                 @elseif($var ==4)
                      <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/obteFinan.png') }}" >
              </div>
                 @elseif($var ==5)
                        <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/obteFinan.png') }}" >
              </div>
                 @elseif($var ==6)
                       <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/obteFinan.png') }}" >
              </div>
                 @endif  


               <div id="apDiv165">
                      <img src="{{ asset('images/objetivosO/OptiRecursos_red.png') }}">
                   </div>
                     <div id="apDiv166">
                        <img src="{{ asset('images/objetivosO/obtener_finan_red.png') }}">
                     </div>
                  <div id="apDiv176">
                    <a id="1" href="{{ asset('images/descripcion/RecursosProyec1.png'); }}" rel="slideshow1">
                        <img src="{{ asset('images/Acciones/RecursosProyec1.png') }}" style="cursor:pointer;">
                      </a>
                    </div>
                    <div id="apDiv177">
                      <a id="2" href="{{ asset('images/descripcion/RecursosProyec2.png'); }}" rel="slideshow2">
                           <img src="{{ asset('images/Acciones/RecursosProyec2.png') }}" style="cursor:pointer;">
                      </a>
                    </div>
                    <div id="apDiv178">
                      <a id="3" href="{{ asset('images/descripcion/RecursosProyec3.png'); }}" rel="slideshow3">
                          <img src="{{ asset('images/Acciones/RecursosProyec3.png') }}" style="cursor:pointer;">
                      </a>
                    </div>

                  <!-- Evaluacion Acciones -->  

                   <div id="apDiv207">
                       <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>
                    <div id="apDiv208">
                       <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>
                    <div id="apDiv209">
                       <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>

            </div>
  @stop