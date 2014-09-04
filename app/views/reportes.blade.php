@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
{{ HTML::link('js/jquery.jCombo.min.js'); }} 
@stop
@section('options')
    
         <div id="menu">
            <ul>
                       <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
                <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/macroprocesos', 'Macroprocesos');}}
                <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/2', 'Administración');}} 
                <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a></li>
            </ul>
          </div> 
@stop

@section('login')
 @parent
   
@stop


@section('content')
@stop

@section('body')

<?php
//Reporte Individual para cada Empleado

//Inicio Sesion
session_start(); 

             
//          Obtengo los nombres de un empleado dado su cedula   
             $tipo ="SELECT emp.`NOMBRES` FROM empleado AS emp WHERE emp.`CI` ='".$_SESSION['user']."';";
             $data= mysql_query($tipo) or die("Error en consulta <br>MySQL dice: ".mysql_error()); 
             
               while($row = mysql_fetch_array($data)){ 
                     $nombres=$row['NOMBRES'];
              }


//Ver el tiempo que no se usa para cerrar sesion
$segundos = time();
            $tiempo_transcurrido = $segundos;
            $tiempo_maximo = $_SESSION['inicio'] + ( $_SESSION['intervalo'] * 600 ) ; // se multiplica por 60 segundos ya que se configura en minutos
            if($tiempo_transcurrido > $tiempo_maximo){
            header('location: ../../logout.php');
            }else{
            // se resetea el inicio
            $_SESSION['inicio'] = time();
            }

//Obtengo los nombres de un empleado dado su cedula 
    $query="SELECT NOMBRES,EMAIL FROM empleado WHERE CI='".$_SESSION['user']."'";
    $result = mysql_query($query);
    $user=  mysql_fetch_array($result);
    
    
    
    
    
//?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SGC | Reportes Personales</title>
 <script type="text/javascript" src="../../smoke/smoke.js"></script>
<link href="../../smoke/smoke.css" rel="stylesheet" media="screen" />
<script src="../../smoke/jquery.js"></script>
<script type="text/javascript" src="jquery.jCombo.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
//selects anidados
  $("#tipos").jCombo({ url: "Gets/GetTipoContabilidadyAuditoria.php",
                                        initial_text: "-- Seleccione un tipo --"});
                                    
          $("#macroprocesos").jCombo({ url: "Gets/GetMacroprocesosContabilidadyAuditoria.php?id=",
          parent: "#tipos",
          selected_value: '178',
                                        initial_text: "-- Seleccione un Macroproceso --"});
             $("#procesos").jCombo({ url: "Gets/GetProcesosContabilidadyAuditoria.php?id=",
          parent: "#macroprocesos",
          selected_value: '178',
                                        initial_text: "-- Seleccione un Proceso --"});

  });

  </script>
<script>
          
       function Alert()
       {
           smoke.alert('Ud no tiene acceso a la evaluación de procesos');
       }
        function Datos()
       {
           smoke.alert('Actualizar de datos, desde  la pagina principal');
       }
        </script> 
<style type="text/css">
#apDiv33 {
  position: absolute;
  left: 17px;
  top: 16px;
  width: 67px;
  height: 34px;
  z-index: 1;
}
#apDiv34 {
  position: absolute;
  left: 963px;
  top: 10px;
  width: 58px;
  height: 55px;
  z-index: 1;
}
#apDiv1 {
  position: absolute;
  left: 910px;
  top: -20px;
  width: 87px;
  height: 93px;
  z-index: 1;
}
#apDiv2 {
  position: absolute;
  left: 872px;
  top: 124px;
  width: 381px;
  height: 39px;
  z-index: 1;
}
</style>
</head>
<body>
<div id="main">
  <div class="sheet">
    <div class="sheet-body">
      <div class="header">
        <div class="header-center">
          <div class="header-png"><img src="../../images/header.png" width="1126" />
            <div id="menu">
              <ul>
                <li class="nivel1"><a href="../Macroprocesos.php" class="nivel1">Macroprocesos</a> </li>
                <li class="nivel1"><a href="../../SGC.php" class="nivel1">Volver</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="apDiv33"><img src="../../images/SGCheader.png" width="426"></div>
        <div id="loginContainer"> <a href="#" id="loginButton"><img id="imgLogin" src="../../images/cerrar sesion.png" border=0></a>
          <div style="clear:both"></div>
          <div id="loginBox"> </div>
        </div>
        <?php
                  $url="../../images/Fotos/".$_SESSION['user'].".png";
                         if(file_exists($url)) // Debo saber si existe esta foto 
                    { 
                        $img = $_SESSION['user'].'.png'; 
                    } 
                    else 
                    {  
                        $img = "fotoreal.png"; 
                    } 
                ?>
        <a onclick="Datos()">
             <div id="apDiv34"><img src="../../images/Fotos/<?php printf($img); ?>" width="92" height="92" style="border: solid 5px #00003d;" ></div>
        </a>
        <div id="apDiv2"> <?php print($nombres); ?> </div>
      </div>
      <div class="content-layout">
        <div class="content-layout-row">
          <div class="layout-cell sidebar1">
            <div class="cleared"></div>
          </div>
          <div class="layout-cell content"> <br />
            <div class="post">
              <h4>Datos Personales</h4>
              </br>
              <b>
              <label>CI: </label>
              </b> <?php echo $_SESSION['user'];?> <b>
              <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre: </label>
              </b> <?php echo $user['NOMBRES'];?> <br>
              <b>
              <label>E-mail: </label>
              </b> <?php echo $user['EMAIL'];?> <b>
              <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Escuela: Contabilidad y Auditoria</label>
              </b> <br>
              <br>
              <b>
              <label>Tipo: </label>
              </b>
              <select id="tipos">
              </select>
            </div>
            <div id="central">
              <div id="central-content">
                <center>
                  <h1>Indicadores</h1>
                </center>
                </br>
                <b>
                <label>Macroproceso: </label>
                </b>
                <select id="macroprocesos">
                </select>
                <br/>
                <b>
                <label>Proceso: </label>
                </b>
                <select id="procesos">
                </select>
                <br>
                <button type="submit" class="buttons" onclick="datos('idpadre','idhijo','inicio','fin')" id="button" name="submit"> <img src="images/buscar.png" alt=""/> Buscar </button>
                <div style="float: left;" id="tablares"> </div>
              </div>
            </div>
            <div class="cleared"> </div>
          </div>
          <div class="layout-cell sidebar2">
            <div class="cleared"></div>
          </div>
        </div>
      </div>
      <div class="cleared"></div>
      <div class="footer">
        <div class="footer-t"></div>
        <div class="footer-l"></div>
        <div class="footer-b"></div>
        <div class="footer-r"></div>
        <div class="cleared"></div>
      </div>
    </div>
    <div class="cleared"></div>
  </div>
</div>
<div class="cleared"></div>
  <center>     <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | <a style="font-size:10px;color:#03F" href="../../Creditos.php">Creditos</a></p></center>
</div>
<script type="text/javascript">
      $('#button').click(function()
    {
    var escuela=2;
//   obtener datos de los combos
    var tipo=$('#tipos').val();
    var macro=$('#macroprocesos').val();
    var proceso=$('#procesos').val();
//    enviar datos para busqueda
    $('#tablares').load("Tabla.php",{esc:escuela,tip:tipo,mac:macro,ind:proceso});

    });

  </script>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#GestiondeCalidad').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
    
    $('#imgLogin').click(function(){
        $(location).attr('href', '../../logout.php');
    });

</script>
</html>


@stop