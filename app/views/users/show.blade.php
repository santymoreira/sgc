@extends('home.layout')



@section('Different_Styles')
	@parent
		{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); }}
	    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css'); }}
	    {{ HTML::style('css/Table.css'); }}
	
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				       		<li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_sgc', 'SGC'); }} 
                       		<li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/macroprocesos','Volver'); }}  
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
					<a class="navbar-brand" href="#">Contabilidad y Auditoría</a>
	  			</div>
	    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a  {{ HTML::link('users/empleados/2','Todos'); }} 
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
						<th class="fuentes">Cédula</th>
						<th class="fuentes">Nombres completos</th>
						<th class="fuentes">Correo Electrónico</th>
						<th class="fuentes">Celular</th>
						<th class="fuentes">Convencional</th>
					</tr>
				</thead>
				<tbody>
					@if (!empty($user))  	
						<tr >
							<td class="fuentes">{{ $user->CI }}</td>
							<td class="fuentes">{{ $user->NOMBRES }}</td>
							<td class="fuentes">{{ $user->EMAIL }}</td>
							<td class="fuentes">{{ $user->CELULAR }}</td>
							<td class="fuentes">{{ $user->CONVENCIONAL }}</td>
						</tr>
					@endif
				</tbody>
			</table>
  		</div>
  	</div>
@stop