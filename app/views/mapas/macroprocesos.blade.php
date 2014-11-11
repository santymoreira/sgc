@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesMacroprocesos.css'); $var=Session::get('escuela'); }}
@stop
  @section('not_general_styles')
{{ HTML::script('js/framebox_reporte.js'); }}
{{ HTML::script('js/smoke.js'); }}
{{ HTML::style('css/smoke.css');  }}
@stop


@section('options')

   			 <div id="menu">
						<ul>
                       <li class="nivel1"><a class="nivel1" href="../welcome">Inicio </a></li>
                        @if($var == 2)  
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_sgc','SGC'); }}  
                        @elseif($var ==7)
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('E_distancia/distancia_sgc','SGC'); }}  
                        @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('empresas/empresas_sgc','SGC'); }}  
                        @elseif($var ==3)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('C_exterior/exterior_sgc','SGC'); }}  
                        @elseif($var ==4)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzas/finanzas_sgc','SGC'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketing/marketing_sgc','SGC'); }}  
                        @elseif($var ==6)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/transporte_sgc','SGC'); }}  
                      @endif
          </div> 
@stop
@section('modificar')
   @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
      <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no" >
        <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a></div>
   @else
    <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no">
      <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
    </a></div>
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
            <div id="apDiv21"><center><img src="{{ asset('images/Contabilidad/contenedor.png') }}"></center></div>
          @elseif($var ==7)
            <div id="apDiv21"><center><img src="{{ asset('images/distancia/contenedor.png') }}"></center></div>
          @elseif($var ==1)
            <div id="apDiv21"><center><img src="{{ asset('images/Empresas/contenedor.png') }}"></center></div>
           @elseif($var ==3)
            <div id="apDiv21"><center><img src="{{ asset('images/Exterior/contenedor.png') }}"></center></div>  
          @elseif($var == 4)
            <div id="apDiv21"><center><img src="{{ asset('images/Finanzas/contenedor.png') }}"></center></div> 
           @elseif($var ==5)
            <div id="apDiv21"><center><img src="{{ asset('images/Marketing/contenedor.png') }}"></center></div> 
           @elseif($var ==6)
            <div id="apDiv21"><center><img src="{{ asset('images/Transporte/contenedor.png') }}"></center></div>  
        @endif         
        
            <div class="cleared"> 
			   <div id="apDiv22">
                    <img onclick="GestionAdmin();" id="gestionadmin" src="{{ asset('images/MacroprocesosEscuelas/GestionAdmin.png') }}" style="cursor:pointer;" width="670" height="51">
                    <a rel="floatbox" rev="width:608 height:217 scrolling:no" class="fbPopup" href="../consolidado/{{Session::get('escuela')}}/4"><center><input type="image" src="{{ asset('images/Utilitarios/rojo.png') }}"/></center> </a>
               </div>
               <div id="apDiv23">
                    <img onclick="GestionAcademica();" id="gestionacad" src="{{ asset('images/MacroprocesosEscuelas/GestionAcade.png'); }}" style="cursor:pointer;" width="670" height="51">
                    <a rel="floatbox" rev="width:608 height:217 scrolling:no" class="fbPopup" href="../consolidado/{{Session::get('escuela')}}/5"><center><input type="image" src="{{ asset('images/Utilitarios/rojo.png') }}"/></center> </a>
                </div>

                <div id="apDiv26">
                     <img src="{{ asset('images/MacroprocesosEscuelas/docencia.png'); }}" width="207" height="66" id="docencia" style="cursor:pointer;"  onclick="Docencia();">
                        <a rel="floatbox" rev="width:608 height:217 scrolling:no" class="fbPopup" href="../consolidado/{{Session::get('escuela')}}/1"><center><input type="image" src="{{ asset('images/Utilitarios/rojo.png') }}"/></center> </a>  
                     </div>
               <div id="apDiv27">
                    <img src="{{ asset('images/MacroprocesosEscuelas/investigacion.png'); }}" width="207" height="66"  id="investigacion" style="cursor:pointer;"  onclick="Investigacion();">
                      <a rel="floatbox" rev="width:608 height:217 scrolling:no" class="fbPopup" href="../consolidado/{{Session::get('escuela')}}/2"><center><input type="image" src="{{ asset('images/Utilitarios/rojo.png') }}"/></center> </a>
                    </div>
                <div id="apDiv28">
                   	 <img src="{{ asset('images/MacroprocesosEscuelas/vinculacion.png'); }}" width="207" height="66"  id="vinculacion" style="cursor:pointer;"  onclick="Vinculacion();">
                        <a rel="floatbox" rev="width:608 height:217 scrolling:no" class="fbPopup" href="../consolidado/{{Session::get('escuela')}}/3"><center><input type="image" src="{{ asset('images/Utilitarios/rojo.png') }}"/></center> </a>
                     </div>
                <div id="apDiv29"> 
                  		<img onclick="Asistencia();" id="asistencia" style="cursor:pointer;" src="{{ asset('images/MacroprocesosEscuelas/asistencia.png'); }}" width="670" height="51" /> 
                        <a rel="floatbox" rev="width:608 height:217 scrolling:no" class="fbPopup" href="../consolidado/{{Session::get('escuela')}}/6"><center><input type="image" src="{{ asset('images/Utilitarios/rojo.png') }}"/></center> </a>
                </div>
                <div id="apDiv30">
                   		<img onclick="Mantenimiento();" id="mantenimiento" style="cursor:pointer;" src="{{ asset('images/MacroprocesosEscuelas/mantenimiento.png'); }}" width="670" height="51" /> 
                        <a rel="floatbox" rev="width:608 height:217 scrolling:no" class="fbPopup" href="../consolidado/{{Session::get('escuela')}}/7"><center><input type="image" src="{{ asset('images/Utilitarios/rojo.png') }}"/></center> </a>
                </div>
				
                 
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

           <div id="footer_macroprocesos" class="cleared"> 
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