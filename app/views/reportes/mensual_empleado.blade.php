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
                       <li class="nivel1"><a class="nivel1" href="../../../welcome">Inicio </a></li>
                          <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a>
                        </ul>     
          </div> 
@stop
 @section('modificar')
   @if (Auth::user())
    <!-- foto del usuario logueado -->
    @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
          <div id="fotoperfil"><a href="../../../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no" >
              <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a>
          </div>
       @else  <!-- Foto por defencto del usuario logueado -->
            <div id="fotoperfil"><a href="../../../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no">
              <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
            </a></div>
     @endif
     <!-- Carga nombres del usuario logueado -->
      <div id="nombres" width="20" height="300">
         <p><b>{{ Auth::user()->NOMBRES }}</b></p> 
       </div> 
       </a>
    @else <!-- foto por defecto usuario no logueado -->
       <div id="fotoperfil"><img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>
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

  
    <b><font color="#000000"> Buscar:</font> </b>
    <input style="width:300px;" id="busqueda" type="text" placeholder="Buscar Empleados..." />
	<div id="resultadoo"></div>
 

<input type="hidden" id="esc" value="{{ $escuela }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">

<script type="text/javascript">
		$("#busqueda").focus();
  		$("#busqueda").keyup(function(){
        
  			var consult = $(this).val();
        var tipoReporte=$("#tipoReporte").val();
        var escuela=$('#esc').val();
	      	
           $("#resultadoo").load("../../../buscarEmpleado",
            {consult: consult,escuela:escuela,tipoReporte:tipoReporte}
            );
});

</script>
@stop     
