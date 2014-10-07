	<html>
		<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Sistema de Gestión de Calidad</title>
   </head>

	    {{ HTML::style('css/new.css'); }} 
		{{ HTML::style('css/new1.css'); }} 
	    {{ HTML::style('css/Table.css'); $var=Session::get('escuela'); }}

<body>
	<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<center><h3>{{ $user->NOMBRES }}</h3></center>
	</div>
	
  	  </nav>

	<div class="panel panel-success" align="center">
  		
  		<div class="panel-body" >
		  	@if(!empty($user))
  				<form method="post" action="#">
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
				<p>
					<input value="{{$user->password}}" type="password" name="password"  placeholder="Contraseña" class="form-control">
				</p>
			   @endif
			  
					 <input type="submit" value="Actualizar" class="btn btn-success">
					  @if(Session::has('message'))
					<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
				@endif
				</form>
		 
		</div>

</body>
</html>