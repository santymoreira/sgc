@extends('layouts.master')
 
@section('sidebar')
     @parent
     Información de empleado
@stop
 
@section('content')
        {{ HTML::link('empleados', 'Volver'); }}
        <h1>
  //Empleado {{$empleado->CI}}
      
</h1>
        
        {{ $empleado->NOMBRES .' '.$empleado->SEXO }}
        
@stop