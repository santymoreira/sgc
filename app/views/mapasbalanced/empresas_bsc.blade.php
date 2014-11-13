@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
{{ HTML::script('js/smoke.js'); }}
{{ HTML::style('css/smoke.css');  }}
@stop
@section('options')
   	
         <div id="menu">
            <ul >
                <li class="nivel1"><a class="nivel1" href="../welcome">Inicio </a>
                <li class="nivel1"><a class="nivel1" {{ HTML::link('empresasbsc/perspectivas', 'Perspectivas');}}
                <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/1', 'Administración');}} 
                <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a>
                  <ul class="cuatro">
                        <li><a {{ HTML::link('reportes/individual_bsc/1/1', 'Individual');}} </a></li>
                         <li><a {{ HTML::link('reportes/individual_bsc/1/2', 'Mensual');}} </a></li>
                          <li><a {{ HTML::link('reportes/mensualE_bsc/1/3', 'Mensual Empleados');}} </a></li>
                          <li><a {{ HTML::link('reportes/mensualE_bsc/1/4', 'Individual Empleados');}} </a></li>
                          <li><a {{ HTML::link('#', 'Descargas');}} </a></li>
                    </ul>
                </li>
            </ul>
          </div> 
@stop

@section('login')
 @parent
   
@stop


@section('content')
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
@section('body')
		{{Session::put('escuela','1'); }}
        <div id="position1" class="layout-cell content">    
          <center> <label>Avance BSC</label>
                    <a rel="floatbox" class="fbPopup" title="Avance BSC Administración de Empresas" rev="width:608 height:217 scrolling:no" href="../consolidadoEscuela_bsc/{{Session::get('escuela')}}">
                      @if($total <= 70) 
                          <input type="image" src="{{asset('images/Utilitarios/rojo.png'); }}"/>
                           @elseif($total >= 70 && $total <= 90)
                             <input type="image" src="{{asset('images/Utilitarios/naranja.png'); }}"/>
                           @elseif($total >= 91 && $total <= 100)
                             <input type="image" src="{{asset('images/Utilitarios/verde.png'); }}"/> 
                        @endif
                    </a>
                    <br/>
                <!-- Logo SGC escuela -->    
                  <img src="{{ asset('images/empresasbsc/empresas.png') }}" width="780" height="295">
            </center>     


              <!-- Mensajes -->
            @if(Session::get('logout'))
                 <script type="text/javascript">
                    smoke.alert('Ud no tiene acceso, Inicie Sesión')
                 </script>
              @endif
           @if(Session::get('denied'))
                 <script type="text/javascript">
                     smoke.alert('Ud no tiene acceso, Tiene que ser administrador del sistema en esta Escuela');
                 </script>
              @endif
  
          <!-- Footer -->    

           <div class="cleared"> 
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