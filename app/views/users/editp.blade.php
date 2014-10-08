	<html>
		<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Sistema de Gestión de Calidad</title>
   </head>

	    {{ HTML::style('css/new.css'); }} 
		{{ HTML::style('css/new1.css'); }} 
	    {{ HTML::style('css/Table.css');}}



<body>
	<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<center><h3>{{ $user->NOMBRES }}</h3></center>
	</div>
	
  	  </nav>

	<div class="panel panel-success" align="center">
  		
  		<div class="panel-body" >
		  	@if(!empty($user))
  				<form method="post" enctype="multipart/form-data" action="../updatep/{{ $user->COD_EMPLEADO}}">
				<p>
					    <label class="form-control">Cambiar foto de Perfil</label>
                <br/><br/>
	                <!--así se crea un campo file en laravel-->
	                <center><input type="file" id="photo" name="photo" accept="image/jpg,image/png,image/gif,image/jpeg,image/bmp" class="form-control"></center>
				</p>
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
					<input value="12345678-9" type="password" name="password"  placeholder="Contraseña" class="form-control">
				</p>
					{{$errors->first('convencional')}}
			   @endif
			  
					 <input type="submit" value="Actualizar" class="btn btn-success">
					  @if(Session::has('message'))
					<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
				@endif
				</form>
		 
		</div>

</body>
</html>