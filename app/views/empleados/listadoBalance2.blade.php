<!doctype html>
<html>
<head>
  {{ HTML::script('js/jquery-1.8.2.min.js'); }}
  {{ HTML::script('js/calendario.js'); }} 
  {{ HTML::script('js/jquery-ui-1.8.20.custom.min.js'); }}
  {{ HTML::script('js/ResponsiveTabs.js'); }}

  {{ HTML::style('css/style_tables.css'); }}
  {{ HTML::style('css/styles.css'); }}
  <!--        estilo cabecera-->
  {{ HTML::style('css/style_tables.css'); }}
  {{ HTML::style('css/styles.css'); }}
  {{ HTML::style('css/select.css'); }}
  {{ HTML::style('css/feature_table.css'); }}
  {{ HTML::style('css/jquery-ui-1.8.20.custom.css'); }}

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <meta name="description" content="Pimp your tables with CSS3" />
 <meta name="keywords" content="table, css3, style, beautiful, fancy, css"/>
<body>
<input type="hidden" id="fecha1" value="{{ $f1 }}">
<input type="hidden" id="fecha2" value="{{ $f2 }}">
<input type="hidden" id="macro" value="{{ $macro }}">
<input type="hidden" id="escuela" value="{{ $escuela }}">
<input type="hidden" id="proceso" value="{{ $proceso }}">
<input type="hidden" id="objeto" value="{{ $objeto }}">
<input type="hidden" id="peso" value="{{ $peso }}">
<input type="hidden" id="empleado" value="{{ $empleados }}">
  <div style="margin-top:20px; text-align:center;">
        
            
             <table class="features-table">

                <thead>
                    <tr>
                        <td scope="col" abbr="Cedula">Cedula</td>
                        <td scope="col" abbr="Docentes">Nombres</td>
                        <td scope="col" abbr="Procesos">Máximo/Cumplido</td>
                        <td scope="col" abbr="Estado">Estado</td>
                        <td scope="col" abbr="Archivo">Archivo</td>
                    </tr>
                </thead>
             </table>

                        <table class="features-table">
        <tbody>
        
          <tr>
              <td scope='row'> {{ $ci }} </td>
              <td scope='row'> {{ $nombres }} </td>
              <td>
                <label>
                  <input type="text" class="numeric" id="t1" required></input>
                </label>
              </td>
              <td>
              <label>
                <input disabled type="text" class="numeric" id="t2" required></input>
              </label>
              </td>
              @if ($cumpli==1)
              <td scope='row'> 
                  <img id="p" src="../../../../../../images/correcto.gif" />
              </td>
              @else
                  <td scope='row'> 
                  <img id="p" src="../../../../../../images/question1.gif" />
              </td>
              @endif
                <td scope='row'> 
                  <!--<img height="75%" width="50%" id="o" src="../../../../../images/file.png" />-->
                  {{ Form::open(array('url'=>'upload/', 'method' => 'post','enctype'=>'multipart/form-data') )}}

                {{ Form::file('archivo') }}
                {{ Form::submit('subir') }}
                {{ Form::hidden('id', $ci.$f1.$f2) }}

                {{ Form::close()}}
              </td>


          </tr>
 </tbody>
 </table>

           
   </div>
 </body>

  </head>
  </html>



<script type='text/javascript'>
    //$(".numeric").numeric();
$('input[type="text"]').change(function(e){
    e.preventDefault();
    var empleado = $(this).attr('id');
    var valu=$(this).val(); 

    $('#t2').removeAttr('disabled');
    $('#t2').change(function()
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
      var peso=$('#peso').val();
      var empleado=$('#empleado').val();
     // var opcion=$(this).val();
                  var op;
            if(valu2==valu)
            {
                $('#p').attr('src', "../../../../../../images/correcto.gif");
            }
            else
            {
                $('#p').attr('src', "../../../../../../images/incorrecto.gif");
            }
            

             $.post('../../../../../../insertarBalance',{opcion:2,empleado:empleado,escuela:escuela,proceso:proceso,peso:peso,macro:macroproceso,fechaInicio:fechaInicio,fechaFin:fechaFin,texto1:valu,texto2:valu2},function(data){
        console.log(data);
      });
        
        }
  });
});
</script>