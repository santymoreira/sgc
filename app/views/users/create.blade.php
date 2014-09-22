@extends('home.layout')

@section('Different_Styles')
	@parent
	<!--	{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); }}
	    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css'); }}
	      {{ HTML::style('css/Table.css'); }} -->

	
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

<center><h3>Administración de empleados</h3></center>
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

	<div class="panel panel-success" align="center">
  		<div class="panel-heading"> 
  			<h4>Registro de Empleados</h4>
  		</div> 
  		<div class="panel-body" >
  			<form method="post" action="store">
				<p>
					<input type="text" name="ci" placeholder="Cédula de Identidad" class="form-control" required>
				</p>
				<p>
					<input type="text" name="nombres" placeholder="Nombres completos" class="form-control" required>
				</p>
				<p>
					<select  class="form-control" name="sexo">
						<option selected value="H">Hombre</option>
						<option value="M">Mujer</option>
					</select>
				</p>
				<p>
					<input type="text" name="email" placeholder="Correo Electrónico" class="form-control" >
				</p>
				<p>
					<input type="text" name="celular" placeholder="Teléfono Móvil" class="form-control" >
				</p>
				<p>
					<input type="text" name="convencional" placeholder="Teléfono convencional" class="form-control" >
				</p>

				<fieldset>
					  <legend>Función: </legend>
					 
					  <div>
					  		<input type="checkbox" name="docente" value="4">Docente<br>
					  </div>
					   <div>
					  		<input type="checkbox" name="director" value="1">Director de Escuela<br>
					  </div> 
					   <div>
					  		<input type="checkbox" name="administrativo" value="2"> Administrativo <br>
					  </div>
					   <div>
					  		<input type="checkbox" name="trabajador" value="3"> Trabajador <br>
					  </div>
				</fieldset> <br>
				<p>
					<input type="submit" value="Guardar" class="btn btn-success">
				</p>
				@if(Session::has('message'))
					<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
				@endif	
			</form>
		</div>
	</div>	
@stop