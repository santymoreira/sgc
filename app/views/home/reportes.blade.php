@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
{{ HTML::script('js/jquery.jCombo.min.js'); }} 
@stop
@section('options')
    
         <div id="menu">
            <ul>
                       <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
                <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/macroprocesos', 'Macroprocesos');}}
                <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/2', 'Administración');}} 
                <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a></li>
            </ul>
          </div> 
@stop

@section('login')
 @parent
   
@stop


@section('content')
@stop

@section('body')

  


@stop
