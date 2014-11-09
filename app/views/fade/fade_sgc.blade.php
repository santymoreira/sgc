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
							  <li class="nivel1"><a class="nivel1" {{ HTML::link('fade/macroprocesos', 'Macroprocesos');}}
							  <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/8', 'Administración');}} 
               <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a></li>
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
            <center> <label>Avance SGC</label>
                    <a rel="floatbox" class="fbPopup" title="Avance SGC Contabilidad y Auditoría" rev="width:608 height:217 scrolling:no" href="../consolidadoEscuela/{{Session::get('escuela')}}">
                      <input type="image" src="{{asset('images/utilitarios/rojo.png'); }}"/>
                    </a>
                    <br/>
                <!-- Logo SGC escuela -->    
                  <img src="{{ asset('images/Fade/fade.png') }}" width="850" height="295">
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