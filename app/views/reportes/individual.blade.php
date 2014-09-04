@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesAcademica.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
	{{ HTML::script('js/FocusAcademica.js'); }} 
	{{ HTML::script('js/jquery.jCombo.min.js'); }} 
	{{ HTML::script('js/combosAnidados.js'); }} 

@stop

@section('options')
   	
   	<div id="menu">
		<ul>
			<li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_sgc', 'Macroproceso'); }} 
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

<select id="combo1" class="select" style="width: 200px;">
<option value="1" selected>Seleccione opción</option>
@foreach ($empleados as $tipo)
<option value="{{ $tipo->COD_TIPO }}">{{ $tipo->DESCRIPCION }}</option>
 @endforeach
</select>
 <div  id="contenido">hola</div>

@stop     