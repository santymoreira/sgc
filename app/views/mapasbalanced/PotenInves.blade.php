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
                        <img src="{{ asset('images/objetivosO/AcredCarr_red.png') }}">
                    </div>
                    <div id="apDiv114">
                      <a id="1" href="{{ asset('images/descripcion/cant_inves.png'); }}" rel="slideshow1">
                         <img src="{{ asset('images/Acciones/cant_inves.png') }}" style="cursor:pointer;">
                      </a>
                    </div>
                    <div id="apDiv115">
                      <a id="2" href="{{ asset('images/descripcion/cant_publi.png'); }}" rel="slideshow2">
                        <img src="{{ asset('images/Acciones/cant_publi.png') }}" style="cursor:pointer;">
                      </a>
                    </div>

                    <!-- Evaluacion Acciones -->
                      <!-- nombre del proyecto/macroproceso/escuela/proceso/objeto/peso-->
                    <div id="apDiv221">
                     <a style="cursor:default;" href="../evaluacionBalance/Plan de investigación/20/{{Session::get('escuela')}}/1/1/1.5"  rel="floatbox">
                   <img src="{{ asset('images/semaforo/rojo.png') }}">  
                 </a>   
                        
                    </div>
                    <div id="apDiv222">
                    <a style="cursor:default;" href="../evaluacionBalance/Producciones Científicas/20/{{Session::get('escuela')}}/2/2/4.5"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>
                    
      </div>
  @stop