@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesAcademica.css'); }}
	{{ HTML::style('css/Evaluacionfloatbox.css'); }}
	{{ HTML::script('js/Evaluacionfloatbox.js'); }}
	{{ HTML::script('js/FocusAcademica.js'); }} 
	{{ HTML::script('js/jquery.jCombo.min.js'); }} 


@stop

@section('options')
   	
   	<div id="menu">
		<ul>
					<li class="nivel1"><a class="nivel1" href="../../../welcome">Inicio </a></li>
			
			<li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">SGC</a>

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

<center><h1> Proyectos </h1></center>


<div  id="contenido">
	<label><b>PERSPECTIVA: </b></label>
	<select id="combo2" class="select" style="width: 200px;">
		<option value="1" selected>Seleccione opción</option>
			@foreach ($macroprocesos as $tipo)
		<option value="{{ $tipo->OBJETIVO }}">{{ $tipo->DESCRIPCION }}</option>
			@endforeach
	</select>
</div>

<input type="hidden" id="tipo_e" value="{{ $tipoEmpleado }}">


<div  id="contenido2">
	<label><b>PROYECTO: </b></label>
	<select id="cgh" class="select" style="width: 200px;" disabled="true">
	<option value="1" selected>Seleccione opción</option>
</div>

<input type="hidden" id="escu" value="{{ $escuela }}">
<input type="hidden" id="cedula" value="{{ $cedula }}">
<input type="hidden" id="codigo" value="{{ $codigo }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">
<input type="hidden" id="name" value="{{ $name }}">
<input type="hidden" id="mail" value="{{ $mail }}">


<script type="text/javascript">
	

  	$('#combo2').change(function(e){
      e.preventDefault();
       var macroproceso=$(this).val();
       var tipoEmpleado=$('#tipo_e').val();
       var escuela=$('#escu').val();
       var cedula=$('#cedula').val();
       var codigo=$('#codigo').val();
       var name=$('#name').val();
       var mail=$('#mail').val();
       var tipoReporte=$('#tipoReporte').val();


           $("#contenido2").load("../../../combo2_bsc",
            {macroproceso: macroproceso,tipoEmpleado: tipoEmpleado,escuela:escuela,cedula:cedula,codigo:codigo,name:name,mail:mail,tipoReporte:tipoReporte}
            );
           
});




</script>
@stop