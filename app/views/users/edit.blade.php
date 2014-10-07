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

	<center><h3>Administración de empleados</h3></center>
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

	<div class="panel panel-success" align="center">
  		<div class="panel-heading"> 
  			<h4>Actualización de Empleados</h4>
  		</div>
  		<div class="panel-body" >
		  	@if(!empty($user))
  				<form method="post" action="../update/{{ $user->COD_EMPLEADO}},{{$var}}">
				<p>
						<input value="{{ $user->CI }}" type="text" name="ci" placeholder="Cédula de Identidad" class="form-control" required>
				</p>
					{{$errors->first('ci')}}
				<p>
					<input value="{{ $user->NOMBRES }}" type="text" name="nombres" placeholder="Nombres completos" class="form-control" required>
				</p>
					{{$errors->first('nombres')}}
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
					{{$errors->first('email')}}
				<p>
					<input value="{{ $user->CELULAR }}" type="text" name="celular" placeholder="Teléfono Móvil" class="form-control" >
				</p>
					{{$errors->first('celular')}}
				<p>
					<input value="{{ $user->CONVENCIONAL }}" type="text" name="convencional" placeholder="Teléfono convencional" class="form-control" >
				</p>
					{{$errors->first('convencional')}}
			   @endif
			   <fieldset>
					  <legend>Función: </legend>
			   <p>
			   		<table style='width: 20%' border="4">
			   				<tr>
				   				<td style='width: 10%' align="center">
				   					<input type="checkbox" id="dire" name="director" value="1"> 
				   				</td>
				   				<td style='width: 50%' align="center">
				   					<b>Director de Escuela</b>
				   				</td>
				   			</tr>
				   			<tr>		
						  		<td style='width: 10%' align="center">	
						  			<input type="checkbox" id="admini" name="admin" value="2">
						  		</td>
						  		<td style='width: 50%' align="center">
				   					<b>Administrativo</b>
				   				</td>
						  	</tr>
						  	<tr>
						  		<td style='width: 10%' align="center">
						  			<input type="checkbox" id="trab" name="trabajador" value="3">
						  		</td>
						  		<td style='width: 50%' align="center">
				   					<b>Trabajador</b>
				   				</td>
						  	</tr>
						  	<tr>
						  		<td style='width: 10%' align="center">
						  			<input type="checkbox" id="doc" name="docente" value="4"> 
						  		</td>
						  		<td style='width: 50%' align="center">
				   					<b>Docente</b>
				   				</td>
						  	</tr>
					</table>
				</p>		
				</fieldset>
				 @if(Session::get('exist'))
			        <p>{{ Session::get('exist') }}</p>
			    @endif
				 @if(Session::get('msg'))
			        <p>{{ Session::get('msg') }}</p>
			    @endif
				</p>
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
  							 	$('#admini').attr('checked', "true");
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
					  @if(Session::has('message'))
					<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
				@endif
				</form>
		 
		</div>

@stop