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
                     <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a> 
                      @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a> 
                        @elseif($var ==4)
                       <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a> 
                        @elseif($var ==5)
                          <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a>  
                        @elseif($var ==6)
                      <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a> 
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
                        <img src="{{ asset('images/contabilidadbsc/MejorarClimaLab.png') }}" >
              </div>
                @elseif($var ==1)
                    <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/MejorarClimaLab.png') }}" >
              </div>
                 @elseif($var ==4)
                     <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/MejorarClimaLab.png') }}" >
              </div>
                 @elseif($var ==5)
                       <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/MejorarClimaLab.png') }}" >
              </div>
                 @elseif($var ==6)
                       <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/MejorarClimaLab.png') }}" >
              </div>
                 @endif  

                <div id="apDiv157">
                        <img src="{{ asset('images/objetivosO/MejorarClima_red.png') }}">
                    </div>
                     <div id="apDiv231">
                      <img onclick="FortaCapDocentes();" id="FortaCapDocentes1" style="cursor:pointer;" src="{{ asset('images/objetivosO/FortaCapDocentes_red.png')}}">
                    </div>

                      <div id="apDiv247">
                        <img src="{{ asset('images/Acciones/Compromiso.png')}}" style="cursor:pointer;">
                     </div>
                     <div id="apDiv248">
                       <img src="{{ asset('images/Acciones/Liderazgo.png')}}" style="cursor:pointer;">
                     </div>
                     <div id="apDiv249">
                        <img src="{{ asset('images/Acciones/MotivPersonal.png')}}" style="cursor:pointer;">
                     </div>

                   

                    <!-- Evaluacion Acciones -->

              <div id="apDiv250">
                      <a style="cursor:default;"  href="../evaluacionBalance/Compromiso/23/{{Session::get('escuela')}}/4/1/3.33"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a>
             </div>
             <div id="apDiv251">
                      <a style="cursor:default;"  href="../evaluacionBalance/Liderazgo/23/{{Session::get('escuela')}}/5/1/3.33"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
             </div>
             <div id="apDiv252">
                      <a style="cursor:default;"  href="../evaluacionBalance/Motivación Personal/23/{{Session::get('escuela')}}/6/1/3.33"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
             </div> 
                    
            </div>
@stop