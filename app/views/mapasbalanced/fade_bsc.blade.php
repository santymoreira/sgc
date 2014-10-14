@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
{{ HTML::script('js/smoke.js'); }}
{{ HTML::style('css/smoke.css');  }}
@stop
@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
							  <li class="nivel1"><a class="nivel1" {{ HTML::link('fade/perspectivas', 'Perspectivas');}}
							  <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/8', 'Administración');}} 
							  <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a>
							  	<ul class="cuatro">
            						<li><a {{ HTML::link('reportes/individual/2', 'Individual');}} </a></li>
									<li><a {{ HTML::link('reportes/mensual/2', 'Mensual');}} </a></li>
                					<li><a {{ HTML::link('reportes/mensual_e/2', 'Mensual Empleados');}} </a></li>
                					<li><a {{ HTML::link('reportes/individual_e/2', 'Individual Empleados');}} </a></li>
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
        <div class="layout-cell content">    
            <div id="central"> 
               <div id="central-content"> </br></br>
                   <center><img src="{{ asset('images/fadebsc/fade.png') }}" width="850" height="295"></center>    
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
                    smoke.alert('Ud no tiene acceso, Tiene que ser Administrador del Sistema')
                 </script>
              @endif
             
      		   <div class="cleared"> 
        <center> <p style="font-size:10px;color:#03F">&nbsp;</p>
          <p style="font-size:10px;color:#03F">&nbsp;</p>
          <p style="font-size:10px;color:#03F">&nbsp;</p>
          <p style="font-size:10px;color:#03F">&nbsp;</p>
          <p style="font-size:10px;color:#03F">&nbsp;</p>
          <p style="font-size:10px;color:#03F">&nbsp;</p>
         <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                    <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
                 </p>
        </center>
      </div>    
		</div>		
@stop    