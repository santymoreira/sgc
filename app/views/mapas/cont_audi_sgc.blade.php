@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
@stop
@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
							  <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/macroprocesos', 'Macroprocesos');}}
							  <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/2', 'Administración');}} 
							  <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a>
							  	<ul class="cuatro">
            						<li><a {{ HTML::link('reportes/individual/2', 'Individual');}} </a></li>
									<li><a {{ HTML::link('reportes/mensual/2', 'Mensual');}} </a></li>
                					<li><a {{ HTML::link('reportes/mensualE/2', 'Mensual Empleados');}} </a></li>
                					<li><a {{ HTML::link('reportes/individual_e/2', 'Individual Empleados');}} </a></li>
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
		{{Session::put('escuela','1'); }}
        <div class="layout-cell content">    
            <div id="central"> 
               <div id="central-content"> </br></br>
                   <center><img src="{{ asset('images/Contabilidad/contabilidad.png') }}"></center>    
               </div>
            </div>
             
      		 <div class="cleared"> 
				<center> <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">Copyright © 2014. All Rights Reserved.</p>
				</center>
			</div>	
		</div>		
@stop