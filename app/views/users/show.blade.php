@extends('home.layout')



@section('Different_Styles')
	@parent
	
	    {{ HTML::style('css/new.css'); }} 
		{{ HTML::style('css/new1.css'); }} 
	    {{ HTML::style('css/Table.css'); $var=Session::get('escuela'); }}
	
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				       		<li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio'); }} 
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

	<h3>Datos del Empleado</h3>
		<nav class="navbar navbar-default" role="navigation">
	  		<div class="container-fluid">
	  			<div class="navbar-header">
					@if($var == 1)
					<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Empresas</a>
					@elseif($var == 2)
						<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Contabilidad y Auditoría</a>
					@elseif($var == 3)
						<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Comercio Exterior</a>
					@elseif($var == 4)
						<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería Financiera</a>
					@elseif($var == 5)
						<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Marketing</a>
					@elseif($var == 6)
						<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Gestión de Transporte</a>
					@elseif($var == 8)
						<a class="navbar-brand" style="cursor:default;" href="#">Facultad de Empresas</a>
					@endif
	  			</div>
	    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li>
    					{{ HTML::link( 'users/empleados/'.$var , 'Todos'.' ') }}
					</li>
        			<li class="active"><a {{ HTML::link('users/create','Nuevo'); }} 
        		</ul>
        	</div>
	        </div>
	    </nav>

	  	<div class="panel panel-success">
	  		<div class="panel-heading">
	  			<h4>Lista de usuarios</h4>
	  		</div>
  		<div class="panel-body">
    		<table class="table">
				<thead>
					<tr >
						<th class="fuentes">Escuela</th>
						<th class="fuentes">Cédula</th>
						<th class="fuentes">Nombres completos</th>
						<th class="fuentes">Correo Electrónico</th>
						<th class="fuentes">Celular</th>
						<th class="fuentes">Convencional</th>
						<th class="fuentes">Tipo Empleado</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($user as $user)  	
						<tr >
							<td class="fuentes">{{ $user->NOMBRE }}</td>
							<td class="fuentes">{{ $user->CI }}</td>
							<td class="fuentes">{{ $user->NOMBRES }}</td>
							<td class="fuentes">{{ $user->EMAIL }}</td>
							<td class="fuentes">{{ $user->CELULAR }}</td>
							<td class="fuentes">{{ $user->CONVENCIONAL }}</td>
							<td class="fuentes">{{ $user->DESCRIPCION }}</td>

						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  	</div>
@stop