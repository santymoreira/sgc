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
      <li class="nivel1"><a id="back" class="nivel1" href="">Atras</a>
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

  <div id="buscador">
    <b><font color="#000000"> Buscar:</font> </b>
    <input style="width:300px;" id="busqueda" type="text" name="buscar" placeholder="Buscar Empleados..." />
	<div id="resultado"></div>
  </div>

<input type="hidden" id="esc" value="{{ $escuela }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">

<script type="text/javascript">
	$(document).ready(function(){
    var escuela=$('#esc').val();
		
		$("#busqueda").focus();
  		$("#busqueda").keyup(function(e){
  			var consult = $("#busqueda").val();
        var tipoReporte=$("#tipoReporte").val();
	      	e.preventDefault();

           $("#resultado").load("../../../buscarEmpleado",
            {consult: consult,escuela:escuela,tipoReporte:tipoReporte}
            );

});
      $('#back').click(function(e)
      {
        alert('sale');
      });

  });

</script>
@stop     
