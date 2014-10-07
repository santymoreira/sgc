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
                        <img src="{{ asset('images/contabilidadbsc/FortaCapDoc.png') }}" >
                    </div>
                @elseif($var ==1)
                  <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/FortaCapDoc.png') }}" >
                    </div>
                 @elseif($var ==4)
                     <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/FortaCapDoc.png') }}" >
                    </div>
                 @elseif($var ==5)
                      <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/FortaCapDoc.png') }}" >
                    </div>
                 @elseif($var ==6)
                     <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/FortaCapDoc.png') }}" >
                    </div>
                 @endif
              
                   
               <div id="apDiv157">
                        <img  onclick="MejorarClima();" id="MejorarClima1" style="cursor:pointer;" src="{{ asset('images/objetivosO/MejorarClima_red.png') }}">
                    </div>
                     <div id="apDiv231">
                      <img src="{{ asset('images/objetivosO/FortaCapDocentes_red.png')}}">
                    </div>
                  
                    <div id="apDiv151">
                      <a id="1" href="{{ asset('images/descripcion/RelaMsCDoc.png'); }}" rel="slideshow1">
                          <img src="{{ asset('images/Acciones/RelaMsCDoc.png') }}" style="cursor:pointer;">
                      </a>                    
                    </div>
                    <div id="apDiv152">
                       <a id="2" href="{{ asset('images/descripcion/RelaPhDDoc.png'); }}" rel="slideshow2">
                          <img src="{{ asset('images/Acciones/RelaPhDDoc.png') }}" style="cursor:pointer;">
                       </a>     
                    </div>
                    <div id="apDiv233">
                          <img src="{{ asset('images/Acciones/nMujeresDoc.png')}}" style="cursor:pointer;">
                    </div>
                   

                    <!-- Evaluacion Acciones -->
                     <div id="apDiv189">
                       <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>
                    <div id="apDiv190">
                       <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>
                     <div id="apDiv191">
                       <img src="{{ asset('images/semaforo/rojo.png') }}">  
                     </div>
                    

        </div>
@stop