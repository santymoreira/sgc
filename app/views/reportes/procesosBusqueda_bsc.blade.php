
<label><b>PROCESO: </b></label>
<select id="combo3" class="select" style="width: 200px;">
<option value="1" selected>Seleccione opción</option>
@foreach ($procesos as $tipo)
<option value="{{ $tipo->COD_PROCESO }}">{{ $tipo->DESCRIPCION }}</option>
@endforeach
</select>

</br>
<label><b>MES: </b></label>
<select id="meses" class="select" style="width: 200px;">
<option value="0" selected>Seleccione opción</option>
<option value="1">Enero</option>
<option value="2">Febrero</option>
<option value="3">Marzo</option>
<option value="4">Abril</option>
<option value="5">Mayo</option>
<option value="6">Junio</option>
<option value="7">Julio</option>
<option value="8">Agosto</option>
<option value="9">Septiembre</option>
<option value="10">Octubre</option>
<option value="11">Noviembre</option>
<option value="12">Diciembre</option>


</select>

<input type="hidden" id="macroproceso" value="{{ $macroproceso }}">
<input type="hidden" id="tipo_e" value="{{ $tipoEmpleado }}">
<input type="hidden" id="escuu" value="{{ $escuela }}">
<input type="hidden" id="cedula" value="{{ $cedula }}">
<input type="hidden" id="codigo" value="{{ $codigo }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">
<input type="hidden" id="name" value="{{ $name }}">
<input type="hidden" id="mail" value="{{ $mail }}">


<button disabled="true" type="submit" id="b"> <img src="{{ asset('images/buscar.png'); }}"/> Buscar </button>
</br></br>
<div style="float: left;" id="tablares"> </div></div>


<script type="text/javascript">
var proceso=0;
  	$('#combo3').change(function(e){
      e.preventDefault();
       proceso=$(this).val();
       //$("#b").prop('disabled', false);
});

      $('#meses').change(function(e){
          e.preventDefault();
          seleccion=$(this).val();
       $("#b").prop('disabled', false);
      });

      $('#b').click(function()
    {
    var escuela=$('#escuu').val();
    var tipo=$('#tipoEmpleado').val();
    var macro=$('#macroproceso').val();
    var cedula=$('#cedula').val();
    var codigo=$('#codigo').val();
    var tipoReporte=$('#tipoReporte').val();
    var name=$('#name').val();
    var mail=$('#mail').val();

    $('#tablares').load("../../../tabla_bsc",{escuela:escuela,tipoEmpleado:tipo,macroproceso:macro,proceso:proceso,cedula:cedula,codigo:codigo,tipoReporte:tipoReporte,mes:seleccion,name:name,mail:mail});
});




  </script>




