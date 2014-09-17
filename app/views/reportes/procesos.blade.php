
<label><b>PROCESO: </b></label>
<select id="combo3" class="select" style="width: 200px;">
<option value="1" selected>Seleccione opción</option>
@foreach ($procesos as $tipo)
<option value="{{ $tipo->COD_PROCESO }}">{{ $tipo->DESCRIPCION }}</option>
@endforeach



<input type="hidden" id="macroproceso" value="{{ $macroproceso }}">
<input type="hidden" id="tipo_e" value="{{ $tipoEmpleado }}">
<input type="hidden" id="escuu" value="{{ $escuela }}">
<input type="hidden" id="cedula" value="{{ $cedula }}">
<input type="hidden" id="codigo" value="{{ $codigo }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">
<input type="hidden" id="nombres" value="{{ $nombres }}">
<input type="hidden" id="mail" value="{{ $mail }}">
<button disabled="true" type="submit" id="b"> <img src="{{ asset('images/buscar.png'); }}"/> Buscar </button>
</br></br>
<div style="float: left;" id="tablares"> </div></div>


<script type="text/javascript">
var proceso=0;
  	$('#combo3').change(function(e){
      e.preventDefault();
       proceso=$(this).val();
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
    var nombres=$('#nombres').val();
    var mail=$('#mail').val();
    //alert(codigo);
    $('#tablares').load("../../../tabla",{escuela:escuela,tipoEmpleado:tipo,macroproceso:macro,proceso:proceso,cedula:cedula,codigo:codigo,nombres:nombres,mail:mail,tipoReporte:tipoReporte});
});




  </script>




