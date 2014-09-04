<div>hjk</div>
<select id="combo2" class="select" style="width: 200px;">
<option value="1" selected>Seleccione opción</option>
@foreach ($empleados as $tipo)
<option value="{{ $tipo->OBJETIVO }}">{{ $tipo->DESCRIPCION }}</option>
@endforeach