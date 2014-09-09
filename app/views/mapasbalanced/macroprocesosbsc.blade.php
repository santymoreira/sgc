@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesMacroprocesos.css'); $var=Session::get('escuela'); }}
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio'); }} 
                       <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_bsc','BSC'); }}  
          </div> 
@stop

@section('login')
 @parent
   
@stop

@section('content')
@stop
@section('body')
        <div class="content-layout" >
         @if($var == 1)
            <div id="apDiv21"><center><img src="{{ asset('images/BalancedContabilidad/contenedor.png') }}"></center></div>
         @endif
 @stop