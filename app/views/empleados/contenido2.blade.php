           <table class="features-table">
				<tbody>
        
					@foreach($empleados as $empleado)
					<tr>
  						<td scope='row'> {{ $empleado->CI }} </td>
  						<td scope='row'> {{ $empleado->NOMBRES }} </td>
  
    		      <td>
                <label>
                  <input type="text" class="numeric" id="{{ $empleado->COD_EMPLEADO }}" required></input>
                </label>
              </td>
              <td>
              <label>
                <input disabled type="text" class="numeric" id="{{ $empleado->COD_EMPLEADO }}t2" required></input>
              </label>
              </td>

  		
              <td scope='row'> 
                  <img id="{{ $empleado->COD_EMPLEADO }}tp" src="../../../../../../../images/question1.gif" />
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



<script type='text/javascript'>
    //$(".numeric").numeric();
$('input[type="text"]').change(function(e){
    e.preventDefault();
    var empleado = $(this).attr('id');
    var valu=$(this).val(); 

    $('#'+empleado+'t2').removeAttr('disabled');
    $('#'+empleado+'t2').change(function()
    {

        var valu2=$(this).val();

        if (valu2>valu)
        {
            alert('El número total debería ser mayor');
        }
        else
        {
                  var escuela=$('#escuela').val();
                  var proceso=$('#proc').val();
                  var porcentaje=$('#porcentaje').val();
                  var macroproceso=$('#macro').val();
                  var fechaInicio=$('#fecha1').val();
                  var fechaFin=$('#fecha2').val();
                  var opcion=$(this).val();
                  var op;
            if(valu2==valu)
            {
                $('#'+empleado+'tp').attr('src', "../../../../../../../images/correcto.gif");
            }
            else
            {
                $('#'+empleado+'tp').attr('src', "../../../../../../../images/incorrecto.gif");
            }
            

             $.post('../../../../../../../categories',{opcion:2,empleado:empleado,escuela:escuela,proceso:proceso,porcentaje:porcentaje,macro:macroproceso,fechaInicio:fechaInicio,fechaFin:fechaFin,texto1:valu,texto2:valu2},
              function(data){console.log(data);});
        
        }
  });
});
</script>