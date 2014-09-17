@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesPerspectivas.css'); $var=Session::get('escuela'); }}
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio'); }} 
                        @if($var == 2)  
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_bsc','BSC'); }}  
                        @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('empresas/empresas_bsc','BSC'); }}  
                        @elseif($var ==4)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzas/finanzas_bsc','BSC'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketing/marketing_bsc','BSC'); }}  
                        @elseif($var ==6)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/transporte_bsc','BSC'); }}  
                      @endif
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
            <div id="apDiv1"><center><img src="{{ asset('images/contabilidadbsc/contenedor.png') }}"></center></div>
         @elseif($var ==1)
            <div id="apDiv1"><center><img src="{{ asset('images/empresasbsc/contenedor.png') }}"></center></div>
          @elseif($var == 4)
            <div id="apDiv1"><center><img src="{{ asset('images/finanzasbsc/contenedor.png') }}"></center></div> 
           @elseif($var ==5)
            <div id="apDiv1"><center><img src="{{ asset('images/marketingbsc/contenedor.png') }}"></center></div> 
           @elseif($var ==6)
            <div id="apDiv1"><center><img src="{{ asset('images/transportebsc/contenedor.png') }}"></center></div>  
        @endif         
        
   
         <!-- Cargamos los objetivos en cada una de las perspectivas -->     

     <div id="apDiv2">
                <img onclick="PotenInvest();" id="PotenInvest" src="{{ asset('images/objetivosO/PotenInvest_red.png') }}" style="cursor:pointer;">
          </div>
           <div id="apDiv3">
                <img onclick="AcredCarr();" id="AcredCarr" src="{{ asset('images/objetivosO/AcredCarr_red.png') }}" style="cursor:pointer;">
      <!--     </div>
          <div id="apDiv4">
                <img onclick="AumenSatis();" id="AumenSatis" src="{{ asset('images/objetivosO/AumenSatis_red.png') }}" style="cursor:pointer;">
          </div>
           <div id="apDiv5">
                <img onclick="FortInterA();" id="FortInterA" src="{{ asset('images/objetivosO/FortInterA_red.png') }}" style="cursor:pointer;">
          </div>
          <div id="apDiv6">
                <img onclick="ImpleSgc();" id="ImpleSgc" src="{{ asset('images/objetivosO/ImpleSgc_red.png') }}" style="cursor:pointer;">
          </div>
          <div id="apDiv7">
                <img onclick="ImpleGproce();" id="ImpleGproce" src="{{ asset('images/objetivosO/ImpleGproce_red.png') }}" style="cursor:pointer;">
          </div>
          <div id="apDiv8">
                <img onclick="PoteInnov();" id="PoteInnov" src="{{ asset('images/objetivosO/PoteInnov_red.png') }}" style="cursor:pointer;">
          </div>
           <div id="apDiv9">
                <img onclick="ImpleMcontemp();" id="ImpleMcontemp" src="{{ asset('images/objetivosO/ImpleMcontemp_red.png') }}" style="cursor:pointer;">
          </div> -->
      </div>         

@stop