<h2>
  Ingresar
 </h2>
 
@if (Session::has('mensaje_login'))
<span>{{ Session::get('mensaje_login') }}</span>
@endif
 
{{ Form::open(array('url' => 'login')) }}
    
    {{ Form::label('CI', 'Cedula'); }}
    {{ Form::text('CI'); }}
    {{ Form::label('password', 'Clave'); }} 
    {{ Form::password('password'); }}
    {{ Form::submit('Ingresar'); }}
 
{{ Form::close() }}
 
<h2>
  Registro
</h2>
@if (Session::has('mensaje_registro'))
<span>{{ Session::get('mensaje_registro') }}</span>
@endif
 
{{ Form::open(array('url' => 'registro')) }}
    
    {{ Form::label('COD_EMPLEADO', 'Codigo'); }}
    {{ Form::text('COD_EMPLEADO'); }}
    {{ Form::label('CI', 'Cédula'); }}
    {{ Form::text('CI'); }}
    {{ Form::label('NOMBRES', 'Nombres'); }} 
    {{ Form::password('NOMBRES'); }}
    {{ Form::label('SEXO', 'Sexo'); }}
    {{ Form::text('SEXO'); }}
    {{ Form::label('EMAIL', 'Correo'); }}
    {{ Form::text('EMAIL'); }}
    {{ Form::label('CELULAR', 'Celular'); }} 
    {{ Form::password('CELULAR'); }}
    {{ Form::label('CONVENCIONAL', 'Convencional'); }}
    {{ Form::text('CONVENCIONAL'); }}
    {{ Form::label('password', 'Contrasena'); }}
    {{ Form::text('password'); }}
    {{ Form::submit('Registrar'); }}
 
{{ Form::close() }}