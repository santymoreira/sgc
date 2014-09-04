
<label><b>MACROPROCESO: </b></label>
<script type="text/javascript"></script>
<select id="combo2" class="select" style="width: 200px;">
<option value="1" selected>Seleccione opción</option>
@foreach ($empleados as $tipo)
<option value="{{ $tipo->OBJETIVO }}">{{ $tipo->DESCRIPCION }}</option>
@endforeach
</select>
<input type="hidden" id="tipo_e" value="{{ $tipo_e }}">


<div  id="contenido2">
	<label><b>PROCESOS: </b></label>
	<select id="cgh" class="select" style="width: 200px;" disabled="true">
	<option value="1" selected>Seleccione opción</option>
</div>


<script type="text/javascript">
	
		 $(document).ready(function(){
  	$('#combo2').change(function(e){
      e.preventDefault();
       var opcion=$(this).val();
       var tip=$('#tipo_e').val();

           $("#contenido2").load("../../combo2",
            {op: opcion,tip: tip}
            );
           
});

  });


</script>
