
<label><b>MACROPROCESO: </b></label>
<script type="text/javascript"></script>
<select id="combo2" class="select" style="width: 200px;">
<option value="1" selected>Seleccione opción</option>
@foreach ($macroprocesos as $tipo)
<option value="{{ $tipo->OBJETIVO }}">{{ $tipo->DESCRIPCION }}</option>
@endforeach
</select>
<input type="hidden" id="tipo_e" value="{{ $tipoEmpleado }}">


<div  id="contenido2">
	<label><b>PROCESOS: </b></label>
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
	
		 $(document).ready(function(){
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
       //alert(name);

           $("#contenido2").load("../../../combo2",
            {macroproceso: macroproceso,tipoEmpleado: tipoEmpleado,escuela:escuela,cedula:cedula,codigo:codigo,name:name,mail:mail,tipoReporte:tipoReporte}
            );
           
});

  });


</script>
