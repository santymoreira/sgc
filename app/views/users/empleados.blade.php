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
	<h3>Administración de empleados</h3>
		<nav class="navbar navbar-default" role="navigation">
	  		<div class="container-fluid">
	  			<div class="navbar-header">
					<a class="navbar-brand" href="#">Contabilidad y Auditoría</a>
	  			</div>
	    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      			<ul class="nav navbar-nav">
	        			<li class="active"><a style="cursor:pointer;" onclick="window.location.reload()">Todos</a></li>
	        			<li><a {{ HTML::link('users/create','Nuevo'); }} 
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
						<th  class="fuentes">Código</th>
						<th  class="fuentes">Cédula</th>
						<th  class="fuentes">Nombres completos</th>
						<th  class="fuentes">Correo Electrónico</th>
						<th  class="fuentes">Celular</th>
						<th  class="fuentes">Convencional</th>
						<th  class="fuentes">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr >
							<td class="fuentes">{{ $user->COD_EMPLEADO }}</td>
							<td class="fuentes">{{ $user->CI }}</td>
							<td class="fuentes">{{ $user->NOMBRES }}</td>
							<td class="fuentes">{{ $user->EMAIL }}</td>
							<td class="fuentes">{{ $user->CELULAR }}</td>
							<td class="fuentes">{{ $user->CONVENCIONAL }}</td>
							<td class="fuentes">
								<a href="../show/{{ $user->COD_EMPLEADO }}"><span class="label label-info">Ver</span></a>
								<a href="../edit/{{ $user->COD_EMPLEADO }}"><span class="label label-success">Editar</span></a>
								<a href="{{ url('users/destroy',$user->COD_EMPLEADO) }}"><span class="label label-danger">Eliminar</span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  	</div>

  	@if(Session::has('message'))
	    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif

@stop