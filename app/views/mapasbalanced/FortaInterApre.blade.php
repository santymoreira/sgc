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
                        @elseif($var ==8)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('fade/fade_bsc','BSC  '); }}  
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
                        @elseif($var ==8)
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
                        <img src="{{ asset('images/contabilidadbsc/FortaInterApre.png') }}" >
              </div>
                   @elseif($var ==1)
                    <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/FortaInterApre.png') }}" >
              </div>
                 @elseif($var ==4)
                   <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/FortaInterApre.png') }}" >
              </div>
                 @elseif($var ==5)
                       <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/FortaInterApre.png') }}" >
              </div>
                 @elseif($var ==6)
                      <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/FortaInterApre.png') }}" >
              </div>
               @elseif($var ==8)
                      <div id="apDiv111">
                        <img src="{{ asset('images/fadebsc/FortaInterApre.png') }}" >
              </div>
                 @endif  

                   
              
                 <div id="apDiv123">
                      <img src="{{ asset('images/objetivosO/FortInterA_red.png') }}">
                   </div>
                   <div id="apDiv124">
                      <img onclick="ImpleSgc();" id="ImpleSgc1" style="cursor:pointer;" src="{{ asset('images/objetivosO/ImpleSgc_red.png') }}">
                   </div>
                   <div id="apDiv125">
                      <img onclick="ImpleGproce();" id="ImpleGproce1" style="cursor:pointer;" src="{{ asset('images/objetivosO/ImpleGproce_red.png') }}">
                   </div>
                   <div id="apDiv126">
                      <img onclick="PoteInnov();" id="PoteInnov1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PoteInnov_red.png') }}">
                   </div>
                    <div id="apDiv228">
                         <img onclick="PotenVinSoc();" id="PotenVinSoc1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PotenVincSoc_red.png')}}">
                   </div>

              <div id="apDiv230">
                   <img src="{{ asset('images/Acciones/CumplirEstafeta.png')}}" style="cursor:pointer;">
              </div>
              
               <div id="apDiv136">
                     <a id="6" href="{{ asset('images/descripcion/CumplirSilabos.png'); }}" rel="slideshow6">
                         <img src="{{ asset('images/Acciones/CumplirSilabos.png')}}" style="cursor:pointer;">
                      </a>
                   </div>
                   <div id="apDiv137">
                     <a id="7" href="{{ asset('images/descripcion/HorasAtencion.png'); }}" rel="slideshow7">
                        <img src="{{ asset('images/Acciones/HorasAtencion.png')}}" style="cursor:pointer;">
                      </a>
               </div>
                  
                   <!-- Evaluacion Acciones -->
                   <!-- nombre del proyecto/macroproceso/escuela/proceso/objeto/peso-->


                  <div id="apDiv195">
                    <a style="cursor:default;"  href="../evaluacionBalance/Cumplimiento de estafeta/22/{{Session::get('escuela')}}/1/2/1.33"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a>  
                    </div>
                    <div id="apDiv197">
                    <a style="cursor:default;"  href="../evaluacionBalance/Cumplimiento de sílabos/22/{{Session::get('escuela')}}/2/2/1.33"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a>
                    </div>
                    <div id="apDiv196">
                      <a style="cursor:default;"  href="../evaluacionBalance/Horas de atención/22/{{Session::get('escuela')}}/3/2/1.33"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
                    </div>
                   
        <!-- Footer --> 
          <div id="footer_acredCarr" class="cleared"> 
              <center> <p style="font-size:10px;color:#03F">&nbsp;</p>
                <p style="font-size:10px;color:#03F">&nbsp;</p>
                <p style="font-size:10px;color:#03F">&nbsp;</p>
               <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                          <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
                       </p>
              </center>
          </div>  
  </div>
@stop