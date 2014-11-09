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

      


         <style>
            #imagen
            {
                left: 10px;
                top:5px;
            }
           
        </style>

    </head>
    <body>

      @if($suma!=0)

    <div id="imagen"><img src="{{ asset('images/SGCheader.png'); }}" width="490" height="70"/></div>
             <center>
           
        <a  rel="floatbox" title="Reportes empleados" rev="width:920 height:350 scrolling:no"  href="../../../imagenReporteMensualBalance/{{$escuela}}/{{$macroproceso}}/{{$proceso}}/{{$mes}}/{{$cedula}}/{{$codigo}}/{{$suma}}/1"
                  <button rel="floatbox" type="submit" class='buttons'  type='submit'  name='submit' id='brender'>
                    <img src="{{ asset('images/chart_bar.png'); }}" alt=""/> Previa
                  </button> 
                    <br/><br/>
                </a>
       
            </center>

             <center> 
         
                <a href="../../../pdfReporteMensualBalance/{{$escuela}}/{{$macroproceso}}/{{$proceso}}/{{$mes}}/{{$cedula}}/{{$codigo}}/{{$suma}}/{{$name}}/{{$mail}}" target="_blank" >
                  <button type="submit" class='buttons'  type='submit'  name='submit' id='bpdf'>
                    <img src="{{ asset('images/pdfd.png'); }}" alt=""/> PDF 
                  </button> 
                  <br/><br/>
                </a>
              </center>

      @else
      <label>No se encontraron resultados</label>
    @endif
    </body>
</html>
