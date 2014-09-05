<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          {{ HTML::script('js/jquery-ui-1.8.20.custom.min.js'); }} 
          {{ HTML::script('js/jquery-1.8.2.min.js'); }}

        {{ HTML::style('css/estilos.css'); }}
        {{ HTML::style('css/estilotab.css'); }}
        {{ HTML::script('js/framebox_reporte.js'); }}
        {{ HTML::style('css/floatbox_reporte.css'); }}
        
    </head>
    <body>
        <table summary="Submitted table designs">
        <caption>
        Sistema de Gestion de Calidad
        </caption>
        <thead>
          <tr>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Fecha Fin</th>
            <th scope="col">Imagen</th>
            <th scope="col">PDF</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th scope="row">Total</th>
            <td colspan="4"> {{count($empleados)}} Indicadores</td>
          </tr>
        </tfoot>
         <tbody>
         <tr>
          @foreach ($empleados as $indicador)
            <td id='{{$indicador->COD_INDICADOR}}inicio'> {{$indicador->FECHA_INICIO}} </td>
            <td id='{{$indicador->COD_INDICADOR}}fin'> {{$indicador->FECHA_FIN}} </td>

            <center>
              <td> 
                <a href="pChart2.1.4/examples/ImagenReporte.php" rel="floatbox" >
                  <button type="submit" class='buttons'  type='submit'  name='submit' onclick="render('{{$indicador->COD_INDICADOR}}inicio','{{$indicador->COD_INDICADOR}}fin')" id='brender'>
                    <img src="{{ asset('images/chart_bar.png'); }}" alt=""/> Render
                  </button> 
                </a>
              </td>
            </center>

             <center> 
              <td>
                <a href="pChart2.1.4/examples/ImagenPDF.php" target="_blank" >
                  <button type="submit" class='buttons'  type='submit'  name='submit' onclick="generarpdf('{{$indicador->COD_INDICADOR}}inicio','{{$indicador->COD_INDICADOR}}fin')" id='bpdf'>
                    <img src="{{ asset('images/pdfd.png'); }}" alt=""/> PDF 
                  </button> 
                </a>
              </td></center>
              </tr>

            @endforeach

        </tbody>
</table>
  <script type="text/javascript">
       var inic;
       var fina;
      function render(i,f)
      {
          
          inic=document.getElementById(i).innerHTML;
          fina=document.getElementById(f).innerHTML;

      };
      $('[id^="brender"]').click(function(){
            $.post('llega.php', {ini:inic,fin:fina})
            });
            


  </script>
  <script type="text/javascript">
       var inic;
       var fina;
      function generarpdf(i,f)
      {  
          inic=document.getElementById(i).innerHTML;
          fina=document.getElementById(f).innerHTML;
      };
      $('[id^="bpdf"]').click(function(){

            $.post('llegapdf.php', {ini:inic,fin:fina})
            });
  </script>
        

    </body>
</html>