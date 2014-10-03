@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
@stop
@section('not_general_styles')
{{ HTML::script('js/framebox_modal.js'); }}
@stop
@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
							  <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/macroprocesos', 'Macroprocesos');}}
							  <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/6', 'Administración');}} 
							  <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a>
							  	<ul class="cuatro">
            						<li><a {{ HTML::link('reportes/individual/6/1', 'Individual');}} </a></li>
									<li><a {{ HTML::link('reportes/individual/6/2', 'Mensual');}} </a></li>
                					<li><a {{ HTML::link('reportes/mensualE/6/3', 'Mensual Empleados');}} </a></li>
                					<li><a {{ HTML::link('reportes/mensualE/6/4', 'Individual Empleados');}} </a></li>
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
		{{Session::put('escuela','6'); }}
        <div class="layout-cell content">    
            <div id="central"> 
               <div id="central-content"> </br></br>
                   <center>
                   <label>Avance SGC&nbsp;&nbsp;&nbsp;</label>
               			<a rel="floatbox" class="fbPopup" href="../consolidadoEscuela/{{Session::get('escuela')}}" />
               				<input type="image" src="{{asset('images/Utilitarios/chart_bar.png'); }}"/>
               			</a>  <br/><br/>
                   		<img src="{{ asset('images/Transporte/Transporte.png') }}" width="850" height="295">
                   </center>    
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