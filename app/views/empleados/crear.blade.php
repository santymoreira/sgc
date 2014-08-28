@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario de empleado
@stop
 
@section('content')
        {{ HTML::link('empleados', 'volver'); }}
        <h1>
  Crear Empleado
      
    
  
</h1>
        {{ Form::open(array('url' => 'empleados/crear')) }}
            {{Form::label('cedula', 'Cedula')}}
            {{Form::text('cedula', '')}}
            {{Form::label('nombres', 'Nombres')}}
            {{Form::text('nombres', '')}}
            {{Form::label('sexo', 'Sexo')}}
            {{Form::text('sexo', '')}}
            {{Form::label('email', 'E-mail')}}
            {{Form::text('email', '')}}
            {{Form::label('celular', 'Celular')}}
            {{Form::text('celular', '')}}
            {{Form::label('convencional', 'Convencional')}}
            {{Form::text('convencional', '')}}
            {{Form::label('contrasena', 'Contrasena')}}
            {{Form::text('contrasena', '')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop