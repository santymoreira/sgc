@extends('home.layout')



@section('Different_Styles')
	@parent
	<!--	{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); }}
	    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css'); }} -->
	
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
  			<h4>Actualización de Empleados</h4>
  		</div>
  		<div class="panel-body" >
		  	@if(!empty($user))
  				<form method="post" action="../update/{{ $user->COD_EMPLEADO }}">
				<p>
						<input value="{{ $user->CI }}" type="text" name="ci" placeholder="Cédula de Identidad" class="form-control" required>
				</p>
				<p>
					<input value="{{ $user->NOMBRES }}" type="text" name="nombres" placeholder="Nombres completos" class="form-control" required>
				</p>
				<p>
				@if( $user->SEXO == 'H')
					<select  class="form-control" name="sexo">
						<option selected value="H">Hombre</option>
						<option value="M">Mujer</option>
					</select>
				@else
					<select  class="form-control" name="sexo">
						<option selected value="M">Mujer</option>
						<option value="H">Hombre</option>
					</select>
				@endif
				</p>
				<p>
					<input value="{{ $user->EMAIL }}" type="text" name="email" placeholder="Correo Electrónico" class="form-control" >
				</p>
				<p>
					<input value="{{ $user->CELULAR }}" type="text" name="celular" placeholder="Teléfono Móvil" class="form-control" >
				</p>
				<p>
					<input value="{{ $user->CONVENCIONAL }}" type="text" name="convencional" placeholder="Teléfono convencional" class="form-control" >
				</p>
			   @endif
			   <p>
			   			<div>
					  		<input type="checkbox" id="dire" name="director" value="1">Director de Escuela<br>
					  	</div>
						<div>
					  		<input type="checkbox" id="admin" name="admin" value="2">Administrativo<br>
					  	</div>
						<div>
					  		<input type="checkbox" id="trab" name="trabajador" value="3">Trabajador<br>
					  	</div>
						<div>
					  		<input type="checkbox" id="doc" name="docente" value="4">Docente<br>
					  	</div>
			   		@foreach($funcion as $funcion)
			   			
					  	<div>
					  		<input type="hidden" id="{{$funcion->COD_TIPO}}" value="{{$funcion->COD_TIPO}}">
					  		
					  	</div>
					  
					@endforeach
					<script type="text/javascript">
						$( document ).ready(function() {
  							if ($("#4").val()==4)
  							 {
  							 	$('#doc').attr('checked', "true");
  							 };
  							 if ($("#1").val()==1)
  							 {
  							 	$('#dire').attr('checked', "true");
  							 };
  							 if ($("#2").val()==2)
  							 {
  							 	$('#dmin').attr('checked', "true");
  							 };
  							 if ($("#3").val()==3)
  							 {
  							 	$('#trab').attr('checked', "true");
  							 };
						});
											
					</script>
			   </p>
				   
					 <input type="submit" value="Guardar" class="btn btn-success">
					  <a href="/users" class="btn btn-default">Regresar</a>
				</form>
		 
		</div>

@stop