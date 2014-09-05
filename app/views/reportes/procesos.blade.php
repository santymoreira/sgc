

<label><b>PROCESO: </b></label>
<select id="combo3" class="select" style="width: 200px;">
<option value="1" selected>Seleccione opción</option>
@foreach ($empleados as $tipo)
<option value="{{ $tipo->COD_PROCESO }}">{{ $tipo->DESCRIPCION }}</option>
@endforeach
</select>

@if (Session::has('tipo'))
  @foreach(Session::get('tipo') as $empleado)
          <input type="hidden" id="escuela" value="{{ $empleado->COD_TIPO }}">
  @endforeach
@endif



<input type="hidden" id="macro" value="{{ $macro }}">
<input type="hidden" id="tipo_e" value="{{ $tipo_e }}">
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
    var escuela=$('#escuela').val();
    var tipo=$('#tipo_e').val();
    var macro=$('#macro').val();
    $('#tablares').load("../../tabla",{esc:escuela,tip:tipo,mac:macro,ind:proceso});
    alert(proceso);
});

  </script>




