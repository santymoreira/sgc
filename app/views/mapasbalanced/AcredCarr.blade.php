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
@section('modificar')
   @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
      <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570" >
        <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a></div>
   @else
    <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570">
      <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
    </a></div>
   @endif
  @stop
@section('options')
   	
   			 <div id="menu">
						<ul>
				       		 @if($var == 2)  
                     <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidadbsc/cont_audi_bsc','BSC'); }}  
                        @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('empresasbsc/empresas_bsc','BSC'); }}  
                        @elseif($var ==4)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzasbsc/finanzas_bsc','BSC'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketingbsc/marketing_bsc','BSC'); }}  
                        @elseif($var ==6)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('transportebsc/transporte_bsc','BSC  '); }}  
                        @elseif($var ==8)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('fadebsc/fade_bsc','BSC  '); }}  
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
                   @elseif($var ==8)
                    <div id="apDiv111">
                            <img src="{{ asset('images/fadebsc/AcredCarr.png') }}" >
                    </div>
                 @endif


                   <div id="apDiv112">
                        <img onclick="PotenInvest();" id="PotenInvest1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PotenInvest_red.png') }}">
                    </div>
                    <div id="apDiv113">
                        <img src="{{ asset('images/objetivosO/AcredCarr_red.png') }}">
                    </div>


                   
                    <div id="apDiv119">
                        <a id="3" href="{{ asset('images/descripcion/AvanceAcred.png'); }}" rel="slideshow3">
                          <img src="{{ asset('images/Acciones/AvanceAcred.png') }}"  style="cursor:pointer;">
                        </a>
                    </div>

                    <!-- Evaluacion Acciones -->
                     <!-- nombre del proyecto/macroproceso/escuela/proceso/objeto/peso-->
                   
                     <div id="apDiv181">
                        <img src="{{asset('images/semaforo/rojo.png')}}">
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