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
                        <img src="{{ asset('images/contabilidadbsc/AumentarSatis.png') }}" >
                  </div>
                   @elseif($var ==1)
                  <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/AumentarSatis.png') }}" >
              </div>
                 @elseif($var ==4)
                   <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/AumentarSatis.png') }}" >
              </div>
                 @elseif($var ==5)
                     <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/AumentarSatis.png') }}" >
              </div>
                 @elseif($var ==6)
                    <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/AumentarSatis.png') }}" >
              </div>
                 @endif


               <div id="apDiv121">
                      <img src="{{ asset('images/objetivosO/AumenSatis_red.png') }}">  
                    </div>
                    <div id="apDiv120">
                        <img src="{{ asset('images/Acciones/SatisEstu.png') }}" style="cursor:pointer;">
                    </div>
                    <div id="apDiv122">
                        <img src="{{ asset('images/Acciones/SatisSoci.png') }}" style="cursor:pointer;">
                    </div>

                <!-- evaluacion Acciones -->      
                <div id="apDiv182">
                     <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>
                    <div id="apDiv183">
                    <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>

      </div>
@stop