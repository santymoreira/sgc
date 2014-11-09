@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
{{ HTML::script('js/smoke.js'); }}
{{ HTML::style('css/smoke.css');  }}
@stop
@section('options')
   	
         <div id="menu">
            <ul>
                <li class="nivel1"><a class="nivel1" href="../welcome">Inicio </a></li>
                <li class="nivel1"><a class="nivel1" {{ HTML::link('fadebsc/perspectivas', 'Perspectivas');}}
                <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/8', 'Administración');}} 
                <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a>
                  <ul class="cuatro">
                        <li><a {{ HTML::link('reportes/individual_bsc/8/1', 'Individual');}} </a></li>
                         <li><a {{ HTML::link('reportes/individual_bsc/8/2', 'Mensual');}} </a></li>
                          <li><a {{ HTML::link('reportes/mensualE_bsc/8/3', 'Mensual Empleados');}} </a></li>
                          <li><a {{ HTML::link('reportes/mensualE_bsc/8/4', 'Individual Empleados');}} </a></li>
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

@section('body')
		{{Session::put('escuela','8'); }}
        <div id="position1" class="layout-cell content">    
           <center> <label>Avance BSC</label>
                    <a rel="floatbox" class="fbPopup" title="Avance BSC Facultad Administración de Empresas" rev="width:608 height:217 scrolling:no" href="../consolidadoEscuela_bsc/{{Session::get('escuela')}}">
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
                  <img src="{{ asset('images/fadebsc/fade.png') }}" width="800" height="295">
            </center>     


              <!-- Mensajes -->
            @if(Session::get('logout'))
                 <script type="text/javascript">
                    smoke.alert('Ud no tiene acceso, Inicie Sesión')
                 </script>
              @endif
           @if(Session::get('denied'))
                 <script type="text/javascript">
                   smoke.alert('Ud no tiene acceso, Tiene que ser administrador del sistema de la Facultad');
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