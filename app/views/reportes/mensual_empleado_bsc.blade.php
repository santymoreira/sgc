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
    

@stop
 @section('modificar')
   @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
      <div id="fotoperfil"><a href="../../../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no" >
        <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a></div>
   @else
    <div id="fotoperfil"><a href="../../../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no">
      <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
    </a></div>
   @endif
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
           $("#resultado").load("../../../buscarEmpleadoBalance",
            {consult: consult,escuela:escuela,tipoReporte:tipoReporte}
            );

});
      $('#back').click(function(e)
      {
        //alert('sale');
      });

  });

</script>
@stop     
