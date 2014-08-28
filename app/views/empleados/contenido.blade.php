           <table class="features-table">
				<tbody>
        
					@foreach($empleados as $empleado)
					<tr>
  						<td scope='row'> {{ $empleado->CI }} </td>
  						<td scope='row'> {{ $empleado->NOMBRES }} </td>
  						<td>
    						<select id="{{ $empleado->COD_EMPLEADO }}" class="select" style="width: 200px;"><option value="1" selected>Seleccione opción</option><option value="2">Sí</option><option value="3">No</option>
    						</select>
  						</td>
              <td scope='row'> 
                  <img id="{{ $empleado->COD_EMPLEADO }}p" src="../../../../../../images/question1.gif" />
              </td>

					</tr>
 @endforeach
  <input type="hidden" id="fecha1" value="{{ $fecha1 }}">
  <input type="hidden" id="fecha2" value="{{ $fecha2 }}">
  <input type="hidden" id="macro" value="{{ $macro }}">
  <input type="hidden" id="escuela" value="{{ $escuela }}">
  <input type="hidden" id="proc" value="{{ $proceso }}">
   @foreach($valor as $val)
              <input type="hidden" id="porcentaje" value="{{ $val->total }}">
                
  @endforeach

 </tbody>
 </table>

 <script>
  $('select').change(function(e){
      e.preventDefault();
      var empleado = $(this).attr('id');
      var escuela=$('#escuela').val();
      var proceso=$('#proc').val();
      var porcentaje=$('#porcentaje').val();
      var macroproceso=$('#macro').val();
      var fechaInicio=$('#fecha1').val();
      var fechaFin=$('#fecha2').val();
      var opcion=$(this).val();
      var op;
      if(opcion==1)
        {
          op=-1;
           $('#'+empleado+'p').attr('src', "../../../../../../images/question1.gif");
        }
      if(opcion==2)
        {
          op=1;
          $('#'+empleado+'p').attr('src', "../../../../../../images/correcto.gif");
        }
      if(opcion==3)
        {
          op=0;
          $('#'+empleado+'p').attr('src', "../../../../../../images/incorrecto.gif");
        }

      $.post('../../../../../../categories',{opcion:op,empleado:empleado,escuela:escuela,proceso:proceso,porcentaje:porcentaje,macro:macroproceso,fechaInicio:fechaInicio,fechaFin:fechaFin,texto1:'null',texto2:'null'},function(data){
        console.log(data);
      });
               
    });

</script>