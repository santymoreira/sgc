</br></br></br>
	<label><b>CI: </b></label> {{$cedula}} </br></br>
	<label><b>NOMBRES: </b></label> {{ $nombre}} </br></br>

<label><b>TIPO: </b></label>
	<select id="combo11" class="select" style="width: 200px;">
	<option value="1" selected>Seleccione opción</option>
	@foreach ($tipoEmpleados as $tipo)
	<option value="{{ $tipo->COD_TIPO }}">{{ $tipo->DESCRIPCION }}</option>
 	@endforeach
	</select>

<center><h1> Indicadores </h1></center>


<div  id="contenidoss">
	<label><b>MACROPROCESO: </b></label>
	<select id="cgh" class="select" style="width: 200px;" disabled="true">
	<option value="1" selected>Seleccione opción</option>
</div>

<input type="hidden" id="esc" value="{{ $escuela }}">
<input type="hidden" id="codigo" value="{{ $empleado }}">
<input type="hidden" id="ci" value="{{ $cedula }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">
<input type="hidden" id="nombre" value="{{ $nombre }}">
<input type="hidden" id="mail" value="{{ $mail }}">

<script type="text/javascript">
	
  	$('#combo11').change(function(){
       var tipoEmpleado=$(this).val();
       var escuela=$('#esc').val();
       var codigo=$('#codigo').val();
       var ci=$('#ci').val();
       var tipoReporte=$('#tipoReporte').val();
       var nombres=$('#nombre').val();
       var mail=$('#mail').val();

           $("#contenidoss").load("../../../combo1",
            {tipoEmpleado: tipoEmpleado,escuela: escuela,tipoReporte:tipoReporte,codigo:codigo,cedula:ci,name:nombres,mail:mail}
            );

  });

</script>
 
