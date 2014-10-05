@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
@stop
@section('not_general_styles')
{{ HTML::script('js/framebox_modal.js'); }}
{{ HTML::script('js/smoke.js'); }}
{{ HTML::style('css/smoke.css');  }}
@stop
@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
							  <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/macroprocesos', 'Macroprocesos');}}
							  <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/2', 'Administración');}} 
							  <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a>
							  	<ul class="cuatro">
            						<li><a {{ HTML::link('reportes/individual/2/1', 'Individual');}} </a></li>
									<li><a {{ HTML::link('reportes/individual/2/2', 'Mensual');}} </a></li>
                					<li><a {{ HTML::link('reportes/mensualE/2/3', 'Mensual Empleados');}} </a></li>
                					<li><a {{ HTML::link('reportes/mensualE/2/4', 'Individual Empleados');}} </a></li>
                 					<li><a {{ HTML::link('descargas', 'Descargas');}} </a></li>
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
		{{Session::put('escuela','2'); }}
        <div class="layout-cell content">    
            <div id="central"> 
               <div id="central-content">
               	<center>
               		<label>Avance SGC&nbsp;&nbsp;&nbsp;</label>
               			<a rel="floatbox" class="fbPopup" href="../consolidadoEscuela/{{Session::get('escuela')}}" />
               				<input type="image" src="{{asset('images/Utilitarios/chart_bar.png'); }}"/>
               			</a>  <br/><br/>
               		<img src="{{ asset('images/Contabilidad/contabilidad.png') }}" width="850" height="295">
               	</center>    
               </div>
            </div>
             
              <!-- Mensajes -->
              @if(!empty($logout))
                 <script type="text/javascript">
                    smoke.alert('Ud no tiene acceso, Inicie Sesión')
                 </script>
              @endif
              @if(!empty($denied))
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
