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
                            <img src="{{ asset('images/contabilidadbsc/AcredCarr.png') }}" >
                    </div>
                   @elseif($var ==1)
                    <div id="apDiv111">
                            <img src="{{ asset('images/empresasbsc/AcredCarr.png') }}" >
                    </div>
                 @elseif($var ==4)
                    <div id="apDiv111">
                            <img src="{{ asset('images/finanzasbsc/AcredCarr.png') }}" >
                    </div>
                 @elseif($var ==5)
                     <div id="apDiv111">
                            <img src="{{ asset('images/marketingbsc/AcredCarr.png') }}" >
                    </div>
                 @elseif($var ==6)
                    <div id="apDiv111">
                            <img src="{{ asset('images/transportebsc/AcredCarr.png') }}" >
                    </div>
                 @endif


                  <div id="apDiv112">
                          <img src="{{ asset('images/objetivosO/PotenInvest_red.png') }}">
                    </div>
                    <div id="apDiv113">
                        <img src="{{ asset('images/objetivosO/AcredCarr_red.png') }}">
                    </div>
               <div id="apDiv116">
                          <img src="{{ asset('images/Acciones/Evaluar_imp.png') }}">
                    </div>
                    <div id="apDiv117">
                      <a id="1" href="{{ asset('images/descripcion/InserLab.png'); }}" rel="slideshow1">
                         <img src="{{ asset('images/Acciones/InserLab.png') }}"  style="cursor:pointer;">  
                       </a>  
                    </div>
                    <div id="apDiv118">
                      <a id="1" href="{{ asset('images/descripcion/SatisEmpre.png'); }}" rel="slideshow2">
                          <img src="{{ asset('images/Acciones/SatisEmpre.png') }}"  style="cursor:pointer;">
                      </a>
                    </div>
                    <div id="apDiv119">
                        <img src="{{ asset('images/Acciones/AvanceAcred.png') }}"  style="cursor:pointer;">
                    </div>

                    <!-- Evaluacion Acciones -->
                    <div id="apDiv179">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>
                     <div id="apDiv180">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>
                     <div id="apDiv181">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                    </div>

       </div>
@stop       