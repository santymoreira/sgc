@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesPerspectivas.css'); $var=Session::get('escuela'); }}
  {{ HTML::script('js/smoke.js'); }}
{{ HTML::style('css/smoke.css');  }}
  
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				             <li class="nivel1"><a class="nivel1" href="../welcome">Inicio </a></li>
                        @if($var == 2)  
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidadbsc/cont_audi_bsc','BSC'); }}  
                        @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('empresasbsc/empresas_bsc','BSC'); }}  
                        @elseif($var ==4)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzasbsc/finanzas_bsc','BSC'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketingbsc/marketing_bsc','BSC'); }}  
                        @elseif($var ==6)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('transportebsc/transporte_bsc','BSC'); }}  
                         @elseif($var ==8)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('fadebsc/fade_bsc','BSC'); }}  
                      @endif
          </div> 
@stop
@section('modificar')
   @if (Auth::user())
    <!-- foto del usuario logueado -->
    @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
          <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no" >
              <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a>
          </div>
       @else  <!-- Foto por defencto del usuario logueado -->
            <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no">
              <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
            </a></div>
     @endif
     <!-- Carga nombres del usuario logueado -->
      <div id="nombres" width="20" height="300">
         <p><b>{{ Auth::user()->NOMBRES }}</b></p> 
       </div> 
       </a>
    @else <!-- foto por defecto usuario no logueado -->
       <div id="fotoperfil"><img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>
    @endif
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
          @elseif($var ==8)
            <div id="apDiv36"><center><img width="949" height="994" src="{{ asset('images/fadebsc/contenedor.png') }}"></center></div>  
        @endif         
        
   
         <!-- Cargamos los objetivos en cada una de las perspectivas -->     

           <div id="apDiv37">
                <img onclick="PotenInvest();" id="PotenInvest1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PotenInvest_red.png') }}">
          </div>
            <div id="apDiv38">
              <img onclick="AcredCarr();" id="AcredCarr1" style="cursor:pointer;" src="{{ asset('images/objetivosO/AcredCarr_red.png') }}">
            </div>
            <div id="apDiv39">
              <img onclick="AumenSatis();" id="AumenSatis1" style="cursor:pointer;" src="{{ asset('images/objetivosO/AumenSatis_red.png')}}">
            </div>
            <div id="apDiv40">
              <img onclick="FortInterA();" id="FortInterA1" style="cursor:pointer;" src="{{ asset('images/objetivosO/FortInterA_red.png')}}">
            </div>
            <div id="apDiv41">
              <img onclick="ImpleSgc();" id="ImpleSgc1" style="cursor:pointer;" src="{{ asset('images/objetivosO/ImpleSgc_red.png')}}">
            </div>
          <div id="apDiv42">
            <img onclick="ImpleGproce();" id="ImpleGproce1" style="cursor:pointer;" src="{{ asset('images/objetivosO/ImpleGproce_red.png')}}">  
            </div>
            <div id="apDiv43">
               <img onclick="PoteInnov();" id="PoteInnov1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PoteInnov_red.png')}}">  
            </div>
            <div id="apDiv46">
              <img onclick="PotenVinSoc();" id="PotenVinSoc1" style="cursor:pointer;" src="{{ asset('images/objetivosO/PotenVincSoc_red.png')}}">  
            </div>
            <div id="apDiv47">
              <img onclick="MejorarClima();" id="MejorarClima1" style="cursor:pointer;" src="{{ asset('images/objetivosO/MejorarClima_red.png')}}"> 
            </div>
          <div id="apDiv48">
            <img onclick="FortaCapDocentes();" id="FortaCapDocentes1" style="cursor:pointer;" src="{{ asset('images/objetivosO/FortaCapDocentes_red.png')}}">
            </div>
            <div id="apDiv50">
              <img onclick="OptiRecursos();" id="OptiRecursos1" style="cursor:pointer;" src="{{ asset('images/objetivosO/OptiRecursos_red.png')}}">
            </div>
   
      <!-- Mensajes -->
                @if(Session::get('logout'))
                 <script type="text/javascript">
                    smoke.alert('Ud no tiene acceso, Inicie Sesión')
                 </script>
              @endif
               @if(Session::get('denied'))
                 <script type="text/javascript">
                    smoke.alert('Ud no tiene acceso, No pertenece a esta Escuela')
                 </script>
              @endif 


        <!-- Footer --> 
            
              <div id="footer_perspectivas" class="cleared"> 
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