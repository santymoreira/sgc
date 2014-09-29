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
                    <a id="1" href="{{ asset('images/descripcion/PlanOpAnual.png'); }}" rel="slideshow1">
                         <img src="{{ asset('images/Acciones/PlanOpAnual.png') }}" style="cursor:pointer;">
                      </a>
                   </div>
                   <div id="apDiv168">
                    <a id="2" href="{{ asset('images/descripcion/PlanAnualContra.png'); }}" rel="slideshow2">
                      <img src="{{ asset('images/Acciones/PlanAnualContra.png') }}" style="cursor:pointer;">
                    </a>
                   </div>
                  <div id="apDiv169">
                   <a id="3" href="{{ asset('images/descripcion/ActivosFijos.png'); }}" rel="slideshow3">
                         <img src="{{ asset('images/Acciones/ActivosFijos.png') }}" style="cursor:pointer;">
                    </a>
                   </div>
                  <div id="apDiv170">
                   <a id="4" href="{{ asset('images/descripcion/ActivosCirculares.png'); }}" rel="slideshow4">
                          <img src="{{ asset('images/Acciones/ActivosCirculares.png') }}" style="cursor:pointer;">
                    </a>
                  </div>
                 <div id="apDiv171">
                   <a id="5" href="{{ asset('images/descripcion/Energeticos.png'); }}" rel="slideshow5">
                       <img src="{{ asset('images/Acciones/Energeticos.png') }}" style="cursor:pointer;">
                    </a>
                 </div>
                <div id="apDiv172">
                  <a id="6" href="{{ asset('images/descripcion/Agua.png'); }}" rel="slideshow6">
                     <img src="{{ asset('images/Acciones/Agua.png') }}" style="cursor:pointer;">
                  </a>
                </div>
                <div id="apDiv173">
                 <a id="7" href="{{ asset('images/descripcion/Telefono.png'); }}" rel="slideshow7">
                    <img src="{{ asset('images/Acciones/Telefono.png') }}" style="cursor:pointer;">
                  </a>
                </div>
                <div id="apDiv174">
                  <a id="8" href="{{ asset('images/descripcion/Internet.png'); }}" rel="slideshow8">
                     <img src="{{ asset('images/Acciones/Internet.png') }}" style="cursor:pointer;">
                  </a>
                </div>
                <div id="apDiv175">
                  <a id="9" href="{{ asset('images/descripcion/GastosOperacion.png'); }}" rel="slideshow9">
                       <img src="{{ asset('images/Acciones/GastosOperacion.png') }}" style="cursor:pointer;">
                  </a>
                </div>

                <!-- Evaluacion Acciones -->

                  <div id="apDiv210">
                    <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
                <div id="apDiv211">
                   <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
                <div id="apDiv212">
                    <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
                <div id="apDiv213">
                   <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
                <div id="apDiv214">
                   <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
                <div id="apDiv215">
                    <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
                <div id="apDiv216">
                   <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
                <div id="apDiv217">
                   <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
                <div id="apDiv218">
                    <img src="{{ asset('images/semaforo/rojo.png') }}">  
                </div>
        </div>
@stop