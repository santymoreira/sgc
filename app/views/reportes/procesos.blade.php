
<label><b>PROCESO: </b></label>
<select id="combo3" class="select" style="width: 200px;">
<option value="1" selected>Seleccione opción</option>
@foreach ($procesos as $tipo)
<option value="{{ $tipo->COD_PROCESO }}">{{ $tipo->DESCRIPCION }}</option>
@endforeach
</select>

@if (Session::has('tipo'))
  @foreach(Session::get('tipo') as $empleado)
          <input type="hidden" id="escuela" value="{{ $empleado->COD_TIPO }}">
  @endforeach
@endif

<input type="hidden" id="macroproceso" value="{{ $macroproceso }}">
<input type="hidden" id="tipo_e" value="{{ $tipoEmpleado }}">
<input type="hidden" id="escuu" value="{{ $escuela }}">
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
    $('#tablares').load("../../tabla",{escuela:escuela,tipoEmpleado:tipo,macroproceso:macro,proceso:proceso});
});


  </script>




