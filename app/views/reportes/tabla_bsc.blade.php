<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          {{ HTML::script('js/jquery-ui-1.8.20.custom.min.js'); }} 
          {{ HTML::script('js/jquery-1.8.2.min.js'); }}

        {{ HTML::style('css/estilos.css'); }}
        {{ HTML::style('css/estilotab.css'); }}
        {{ HTML::script('js/framebox_1.js'); }}
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
            <td colspan="4"> {{count($indicadores)}} Indicadores</td>
          </tr>
        </tfoot>
         <tbody>
         <tr>
          @foreach ($indicadores as $indicador)
            <td id='{{$indicador->COD_INDICADOR}}inicio'> {{$indicador->FECHA_INICIO}} </td>
            <td id='{{$indicador->COD_INDICADOR}}fin'> {{$indicador->FECHA_FIN}} </td>

            <center>
              <td> 

                <a  rel="floatbox"  href="../../../imagenReporteBalance/{{$escuela}}/{{$macroproceso}}/{{$proceso}}/{{$indicador->FECHA_INICIO}}/{{$indicador->FECHA_FIN}}/{{$cedula}}/{{$codigo}}/1"
                  <button rel="floatbox" type="submit" class='buttons'  type='submit'  name='submit' id='brender'>
                    <img src="{{ asset('images/chart_bar.png'); }}" alt=""/> Render
                  </button> 
                </a>
              </td>
            </center>

             <center> 
              <td>
                <a href="../../../pdfReporte/{{$escuela}}/{{$macroproceso}}/{{$proceso}}/{{$indicador->FECHA_INICIO}}/{{$indicador->FECHA_FIN}}/{{$cedula}}/{{$codigo}}/{{$name}}/{{$mail}}" target="_blank" >
                  <button type="submit" class='buttons'  type='submit'  name='submit' id='bpdf'>
                    <img src="{{ asset('images/pdfd.png'); }}" alt=""/> PDF 
                  </button> 
                </a>
              </td></center>
              </tr>
           

            @endforeach

        </tbody>
</table>

    </body>
</html>
