</br></br></br>
	<label><b>CI: </b></label> {{$ci}} </br></br>
	<label><b>NOMBRES: </b></label> {{ $nombres}} </br></br>

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
<input type="hidden" id="codigo" value="{{ $empleado }}">
<input type="hidden" id="ci" value="{{ $ci }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">
<input type="hidden" id="nombres" value="{{ $nombres }}">
<input type="hidden" id="mail" value="{{ $mail }}">

<script type="text/javascript">
		 $(document).ready(function(){
  	$('#combo1').change(function(e){
      e.preventDefault();
       var tipoEmpleado=$(this).val();
       var escuela=$('#esc').val();
       var codigo=$('#codigo').val();
       var ci=$('#ci').val();
       var tipoReporte=$('#tipoReporte').val();
       var nombres=$('#nombres').val();
       var mail=$('#mail').val();

           $("#contenido").load("../../../combo1",
            {tipoEmpleado: tipoEmpleado,escuela: escuela,tipoReporte:tipoReporte,codigo:codigo,cedula:ci,nombres:nombres,mail:mail}
            );

});

  });



</script>
 
