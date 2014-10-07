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


                <div id="apDiv241">
                <img src="{{ asset('images/objetivosO/OptiRecursos_red.png')}}" style="cursor:pointer;">
              </div>

              <div id="apDiv242">
                <img src="{{ asset('images/Acciones/PresuDoc.png')}}" style="cursor:pointer;">
              </div>
              <div id="apDiv243">
                <img src="{{ asset('images/Acciones/PresuVinc.png')}}" style="cursor:pointer;">
              </div>
              <div id="apDiv244">
                <img src="{{ asset('images/Acciones/PresuInves.png')}}" style="cursor:pointer;">  
              </div>
              <div id="apDiv245">
                <img src="{{ asset('images/Acciones/PresuAdmin.png')}}" style="cursor:pointer;">  
              </div>
              <div id="apDiv246">
                <img src="{{ asset('images/Acciones/POA.png')}}" style="cursor:pointer;">
              </div>
                   

                  

                <!-- Evaluacion Acciones -->

                  <div id="apDiv210">
                      <a style="cursor:default;"  href="../evaluacionBalance/Presupuesto de Docencia/24/{{Session::get('escuela')}}/1/1/4"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a>
                  </div>
                <div id="apDiv211">
                    <a style="cursor:default;"  href="../evaluacionBalance/Presupuesto de Vinculación/24/{{Session::get('escuela')}}/2/1/4"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a>
                </div>
                <div id="apDiv212">
                    <a style="cursor:default;"  href="../evaluacionBalance/Presupuesto de Investigación/24/{{Session::get('escuela')}}/3/1/4"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a>
                </div>
                <div id="apDiv213">
                      <a style="cursor:default;"  href="../evaluacionBalance/Presupuesto de Administración/24/{{Session::get('escuela')}}/4/1/4"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a>
                </div>
                <div id="apDiv214">
                      <a style="cursor:default;"  href="../evaluacionBalance/POA/24/{{Session::get('escuela')}}/5/1/4"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a>
                </div>
               
        </div>
@stop