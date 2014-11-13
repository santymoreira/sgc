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
<<<<<<< HEAD
   @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
      <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570" >
        <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a></div>
   @else
    <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570">
      <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
    </a></div>
   @endif
=======
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
>>>>>>> d4b4f6320e00c9e195c368d7ce6b0995d8997233
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
               		<li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a>  
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
                        <img src="{{ asset('images/contabilidadbsc/Poten_Inves.png') }}" >
              </div>
                @elseif($var ==1)
                        <div id="apDiv111">
                        <img src="{{ asset('images/empresasbsc/Poten_Inves.png') }}" >
              </div>
                 @elseif($var ==4)
                        <div id="apDiv111">
                        <img src="{{ asset('images/finanzasbsc/Poten_Inves.png') }}" >
              </div>
                 @elseif($var ==5)
                         <div id="apDiv111">
                        <img src="{{ asset('images/marketingbsc/Poten_Inves.png') }}" >
              </div>
                 @elseif($var ==6)
                         <div id="apDiv111">
                        <img src="{{ asset('images/transportebsc/Poten_Inves.png') }}" >
              </div>
              @elseif($var ==8)
                         <div id="apDiv111">
                        <img src="{{ asset('images/fadebsc/Poten_Inves.png') }}" >
              </div>
                 @endif  



                    <div id="apDiv112">
                        <img src="{{ asset('images/objetivosO/PotenInvest_red.png') }}">
                    </div>
                    <div id="apDiv113">
                        <img onclick="AcredCarr();" id="AcredCarr1" style="cursor:pointer;" src="{{ asset('images/objetivosO/AcredCarr_red.png') }}">
                    </div>
                 

                  <div id="apDiv114">
                        <img src="{{ asset('images/Acciones/PlanInves.png')}}" style="cursor:pointer;">
                   </div>
                    
                   <div id="apDiv115">
                        <img src="{{ asset('images/Acciones/ProduccCient.png')}}" style="cursor:pointer;">
                    </div>
                  <div id="apDiv235">
                       <img src="{{ asset('images/Acciones/CantLibrosRevi.png')}}" style="cursor:pointer;">
                   </div>
                   <div id="apDiv236">
                       <img src="{{ asset('images/Acciones/ProducRegio.png')}}" style="cursor:pointer;">
                   </div>
                   

                    <!-- Evaluacion Acciones -->
                      <!-- nombre del proyecto/macroproceso/escuela/proceso/objeto/peso-->
                 
                  <div id="apDiv237">
                      <a style="cursor:default;" rev="width:1000 height:300" href="../evaluacionBalance/Plan de investigación/20/{{Session::get('escuela')}}/1/1/1.5"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
                  </div>

                   <div id="apDiv238">
                      <a style="cursor:default;" rev="width:1000 height:300"  href="../evaluacionBalance/Producciones Científicas/20/{{Session::get('escuela')}}/2/2/4.5"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
                   </div>
                   <div id="apDiv239">
                      <a style="cursor:default;" rev="width:1000 height:300" href="../evaluacionBalance/Cantidad de libros revisados por pares/20/{{Session::get('escuela')}}/3/1/3"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
                   </div>
                   <div id="apDiv240">
                     <a style="cursor:default;" rev="width:1000 height:300"  href="../evaluacionBalance/Producciones regionales/20/{{Session::get('escuela')}}/4/1/1"  rel="floatbox">
                      <img src="{{ asset('images/semaforo/rojo.png') }}">  
                      </a> 
                   </div>
                    
        <!-- Footer --> 
            
             <div id="footer_gestionProc" class="cleared"> 
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

