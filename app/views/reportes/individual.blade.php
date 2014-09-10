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

<center><h1> Datos Personales </h1></center>
<label><b>CI: </b></label> {{Auth::user()->CI}} </br></br>
<label><b>NOMBRES: </b></label> {{ Auth::user()->NOMBRES}} </br></br>
<label><b>EMAIL: </b></label> {{ Auth::user()->EMAIL}} </br></br>
<label><b>TIPO: </b></label>
	<select id="combo1" class="select" style="width: 200px;">
	<option value="1" selected>Seleccione opción</option>
	@foreach ($tipoEmpleados as $tipo)
	<option value="{{ $tipo->COD_TIPO }}">{{ $tipo->DESCRIPCION }}</option>
 	@endforeach
	</select></br></br>
<center><h1> Indicadores </h1></center>


<div  id="contenido">
	<label><b>MACROPROCESO: </b></label>
	<select id="cgh" class="select" style="width: 200px;" disabled="true">
	<option value="1" selected>Seleccione opción</option>
</div>

<input type="hidden" id="esc" value="{{ $escuela }}">
<input type="hidden" id="cedula" value="{{ $cedula }}">
<input type="hidden" id="codigo" value="{{ $codigo }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">
<input type="hidden" id="nombres" value="{{ $nombres }}">
<input type="hidden" id="mail" value="{{ $mail }}">



@stop     
