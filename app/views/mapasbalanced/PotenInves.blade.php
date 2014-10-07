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
             
               @if($var == 2)  
                       <div id="apDiv111">
                        <img src="{{ asset('images/contabilidadbsc/Poten_Inves.png') }}" >
              </div>
                @elseif($var ==1)
                        <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/Poten_Inves.png') }}" >
              </div>
                 @elseif($var ==4)
                        <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/Poten_Inves.png') }}" >
              </div>
                 @elseif($var ==5)
                         <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/Poten_Inves.png') }}" >
              </div>
                 @elseif($var ==6)
                         <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/Poten_Inves.png') }}" >
              </div>
                 @endif  



                    <div id="apDiv112">
                        <img src="{{ asset('images/objetivosO/PotenInvest_red.png') }}">
                    </div>
                    <div id="apDiv113">
                        <img onclick="AcredCarr();" id="AcredCarr1" style="cursor:pointer;" src="{{ asset('images/objetivosO/AcredCarr_red.png') }}">
                    </div>
                 

                  <div id="apDiv114">
                        <img src="{{ asset('images/Acciones/PlanInves.png')}}" style="cursor:pointer;">
                   </div>
                    
                   <div id="apDiv115">
                        <img src="{{ asset('images/Acciones/ProduccCient.png')}}" style="cursor:pointer;">
                    </div>
                  <div id="apDiv235">
                       <img src="{{ asset('images/Acciones/CantLibrosRevi.png')}}" style="cursor:pointer;">
                   </div>
                   <div id="apDiv236">
                       <img src="{{ asset('images/Acciones/ProducRegio.png')}}" style="cursor:pointer;">
                   </div>
                   
                 

                    <!-- Evaluacion Acciones -->
                      <!-- nombre del proyecto/macroproceso/escuela/proceso/objeto/peso-->
                 
                  <div id="apDiv237">
                      <img src="{{ asset('images/semaforo/rojo.png')}}">
                   </div>
                   <div id="apDiv238">
                     <img src="{{ asset('images/semaforo/rojo.png')}}">
                   </div>
                   <div id="apDiv239">
                     <img src="{{ asset('images/semaforo/rojo.png')}}">
                   </div>
                   <div id="apDiv240">
                     <img src="{{ asset('images/semaforo/rojo.png')}}">
                   </div>
                    
      </div>
  @stop