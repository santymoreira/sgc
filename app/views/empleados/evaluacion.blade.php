
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
  <div style="margin-top:20px; text-align:center;">
        
            <h2>Proceso:{{{ $procesos }}} </h2>
             <h3>Responsable: {{{ $docentes }}} </h3>
             <table class="features-table">
                <label><b>Fecha Inicio:</b></label>
                <input id="date1" name="date1" class="datepicker"/>
                <label><b>Fecha Fin:</b></label>  
                <input id="date2" name="date2" class="datepicker" disabled="true" />
                <input type="hidden" id="date3" value="{{ Carbon::now()->toDateString('yy-mm-dd'); }}">
                <thead>
                    <tr>
                        <td></td>
                        <td scope="col" abbr="Docentes">Nombres</td>
                        <td scope="col" abbr="Procesos">Procesos</td>
                        <td scope="col" abbr="Estado">Estado</td>
                    </tr>
                </thead>
             </table>
             <!-- codigo de macroproceso, viene de la llamada-->
             <input type="hidden" id="macro" value="{{{ $macroproceso }}}">
             <input type="hidden" id="esc" value="{{{ $escuela }}}">
             <input type="hidden" id="proc" value="{{{ $proceso }}}">
             <input type="hidden" id="tipo" value="{{{ $tipo }}}">
             <input type="hidden" id="objeto" value="{{{ $objeto }}}">
             <!-- div en donde se carga la lista de empleados a ser evaluados-->
             <div  id="contenido"></div>
   </div>
 </body>

	</head>
	</html>

<script>
     
    //la fecha no puede ser mayor a la fecha actual
    $('#date1').change(function(){
        var a=$("#date1").val();
        var b=$("#date3").val();
        if(a<b){
         $("#date2").prop('disabled', false);
        }
        else{
          alert('La fecha no puede ser mayor a la fecha actual');
          $("#date1").val(" ");
          //$("#date2").prop('disabled', false);
        }       
      }
      );
    //validacion de la fecha 
    //fecha 2 tiene que ser menor que la fecha1
      $('#date2').change(function(){
        var f1=$("#date1").val();
        var f2=$("#date2").val();
        var macro=$('#macro').val();
        var esc=$('#esc').val();
        var proc=$('#proc').val();
        var tipo=$('#tipo').val();
         var objeto=$('#objeto').val();

        if (f2>=f1)
        {     
          //alert(macro);
            //$('select').prop('disabled', false);
            $("#contenido").load("../../../../../../../categories2",
            {fecha1: f1, fecha2: f2,macro: macro,escuela: esc,proceso: proc,tipo: tipo,objeto: objeto}
            );
        }
            else
                {
                    alert('La fecha final debe ser mayor o igual a la inicial');
                    $("#date2").val(" ");
                    $("#date2").prop('disabled', true);
                }
        });

</script>