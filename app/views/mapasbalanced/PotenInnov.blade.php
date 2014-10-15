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
               @elseif($var ==8)
                       <div id="apDiv111">
                        <img src="{{ asset('images/fadebsc/PotenInnov.png') }}" >
              </div>
                 @endif  


              <div id="apDiv123">
                      <img onclick="FortInterA();" id="FortInterA1" style="cursor:pointer;" src="{{ asset('images/objetivosO/FortInterA_red.png') }}">
                   </div>
                   <div id="apDiv124">
                      <img onclick="ImpleSgc();" id="ImpleSgc1" style="cursor:pointer;"  src="{{ asset('images/objetivosO/ImpleSgc_red.png') }}">
                   </div>
                   <div id="apDiv125">
                      <img onclick="ImpleGproce();" id="ImpleGproce1" style="cursor:pointer;" src="{{ asset('images/objetivosO/ImpleGproce_red.png') }}">
                   </div>
                   <div id="apDiv126">
                      <img src="{{ asset('images/objetivosO/PoteInnov_red.png') }}">
                   </div>
                   <div id="apDiv228">
                         <img onclick="PotenVinSoc();" id="PotenVinSoc1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PotenVincSoc_red.png')}}">
                   </div>
                 
                    <div id="apDiv140">
                    <a id="1" href="{{ asset('images/descripcion/RelacInves_nDoc.png'); }}" rel="slideshow1">
                        <img src="{{ asset('images/Acciones/RelacInves_nDoc.png') }}" style="cursor:pointer;">
                    </a>
                   </div>
                   <div id="apDiv141">
                    <a id="2" href="{{ asset('images/descripcion/RelaInves_nEstuInvo.png'); }}" rel="slideshow2">
                        <img src="{{ asset('images/Acciones/RelaInves_nEstuInvo.png') }}" style="cursor:pointer;">
                    </a>
                   </div>

                   <!-- Evaluacion Acciones -->

                    <div id="apDiv219">
                     <a style="cursor:default;"  href="../evaluacionBalance/Relación Investigación - Docentes/22/{{Session::get('escuela')}}/5/2/2"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
                   </div>
                   <div id="apDiv220">
                      <a style="cursor:default;"  href="../evaluacionBalance/Relación Investigación - Estudiantes/22/{{Session::get('escuela')}}/7/2/2"  rel="floatbox">
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