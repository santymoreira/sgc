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
            <div id="apDiv36"><center><img src="{{ asset('images/contabilidadbsc/contenedor.png') }}"></center></div>
         @elseif($var ==1)
            <div id="apDiv36"><center><img src="{{ asset('images/empresasbsc/contenedor.png') }}"></center></div>
          @elseif($var == 4)
            <div id="apDiv36"><center><img src="{{ asset('images/finanzasbsc/contenedor.png') }}"></center></div> 
           @elseif($var ==5)
            <div id="apDiv36"><center><img src="{{ asset('images/marketingbsc/contenedor.png') }}"></center></div> 
           @elseif($var ==6)
            <div id="apDiv36"><center><img width="949" height="994" src="{{ asset('images/transportebsc/contenedor.png') }}"></center></div>  
        @endif         
        
   
         <!-- Cargamos los objetivos en cada una de las perspectivas -->     

            <div id="apDiv37">
                <img onclick="PotenInvest();" id="PotenInvest1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PotenInvest_red.png') }}">
            </div>
            <div id="apDiv38">
                <img onclick="AcredCarr();" id="AcredCarr1" style="cursor:pointer;" src="{{ asset('images/objetivosO/AcredCarr_red.png') }}">
            </div>
            <div id="apDiv39">
                <img onclick="AumenSatis();" id="AumenSatis1" style="cursor:pointer;" src="{{ asset('images/objetivosO/AumenSatis_red.png') }}">
            </div>
            <div id="apDiv40">
                <img onclick="FortInterA();" id="FortInterA1" style="cursor:pointer;" src="{{ asset('images/objetivosO/FortInterA_red.png') }}">
            </div>
            <div id="apDiv41">
                <img onclick="ImpleSgc();" id="ImpleSgc1" style="cursor:pointer;" src="{{ asset('images/objetivosO/ImpleSgc_red.png') }}">
            </div>
            <div id="apDiv42">
                <img onclick="ImpleGproce();" id="ImpleGproce" style="cursor:pointer;" src="{{ asset('images/objetivosO/ImpleGproce_red.png') }}">  
            </div>
            <div id="apDiv43">
                <img onclick="PoteInnov();" id="PoteInnov1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PoteInnov_red.png') }}">
            </div>
            <div id="apDiv44">
                <img onclick="ImpleMcontemp();" id="ImpleMcontemp1" style="cursor:pointer;" src="{{ asset('images/objetivosO/ImpleMcontemp_red.png') }}">
            </div>
            <div id="apDiv45">
                <img onclick="DesaCent();" id="DesaCent1" style="cursor:pointer;" src="{{ asset('images/objetivosO/DesaCent_red.png') }}">
            </div>
            <div id="apDiv46">
                <img onclick="PromProyec();" id="PromProyec1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PromProyec_red.png') }}">
            </div>
            <div id="apDiv47">
                <img onclick="FortaRRHH();" id="FortaRRHH1" style="cursor:pointer;" src="{{ asset('images/objetivosO/FortaRRHH_red.png') }}">
            </div>
            <div id="apDiv48">
                <img onclick="MejorarClima();" id="MejorarClima1" style="cursor:pointer;" src="{{ asset('images/objetivosO/MejorarClima_red.png') }}">
            </div>
            <div id="apDiv49">
              <img onclick="PromoCoope();" id="PromoCoope1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PromoCoope_red.png') }}"> 
            </div>
            <div id="apDiv50">
              <img onclick="OptiRecursos();" id="OptiRecursos1" style="cursor:pointer;" src="{{ asset('images/objetivosO/OptiRecursos_red.png') }}">
            </div>
            <div id="apDiv51">
              <img onclick="obtener_finan();" id="obtener_finan1" style="cursor:pointer;" src="{{ asset('images/objetivosO/obtener_finan_red.png') }}">  
            </div>
       
       
     
    </div>         

@stop