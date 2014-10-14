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
               @elseif($var ==8)
                    <div id="apDiv111">
                        <img src="{{ asset('images/fadebsc/AumentarSatis.png') }}" >
              </div>
                 @endif


               <div id="apDiv121">
                      <img src="{{ asset('images/objetivosO/AumenSatis_red.png') }}">  
                    </div>
                    <div id="apDiv120">
                        <a id="1" href="{{ asset('images/descripcion/SatisEstu.png'); }}" rel="slideshow1">
                          <img src="{{ asset('images/Acciones/SatisEstu.png') }}" style="cursor:pointer;">
                        </a>  
                    </div>
                   

                <!-- evaluacion Acciones -->    
                 <!-- nombre del proyecto/macroproceso/escuela/proceso/objeto/peso-->  
                <div id="apDiv182">
                                          <a style="cursor:default;" rev="width:1000 height:300 scrolling:no" href="../evaluacionBalance/Satisfacción del estudiante/21/{{Session::get('escuela')}}/1/1/20"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
                </div>
      </div>
        <!-- Footer --> 
            
            </br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br>
           
        <center>
        <p style="font-size:10px;color:#03F">&nbsp;</p>

           <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                    <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
            </p>
      </center>    
@stop