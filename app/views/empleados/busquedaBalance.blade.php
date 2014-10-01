
  {{ HTML::script('js/jquery-1.8.2.min.js'); }}
<style>
.display_box /*estilos para cada caja unitaria de cada usuario que se muestra*/
{
padding:2px;
padding-left:6px; 
font-size:18px;
height:63px;
color:#3b5999; 
}

.display_box:hover /*estilos para cada caja unitaria de cada usuario que se muestra. cuando el mause se pocisiona sobre el area*/
{
background: #7f93bc;
color: #FFF;
}

</style>


<div id="resu"></div>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<input type="hidden" id="fecha1" value="{{ $fecha1 }}">
<input type="hidden" id="fecha2" value="{{ $fecha2 }}">
<input type="hidden" id="macro" value="{{ $macro }}">
<input type="hidden" id="escuela" value="{{ $escuela }}">
<input type="hidden" id="proceso" value="{{ $proceso }}">
<input type="hidden" id="objeto" value="{{ $objeto }}">
<input type="hidden" id="peso" value="{{ $peso }}">

  @foreach ($empleados as $empleado)
<a id="{{$empleado->COD_EMPLEADO}}" style="text-decoration:none;"> 
  <div id="displayBox" align="left" >

        <img src="{{ asset('images/fotoreal.jpg'); }}" width="30" height="30" />
        <font color="#0B0B61"><b>{{$empleado->NOMBRES}}</b></font>
        <br/><br/>
        <input type="hidden" id="{{$empleado->COD_EMPLEADO}}ci" value="{{$empleado->CI}}">
        <input type="hidden" id="{{$empleado->COD_EMPLEADO}}nombres" value="{{$empleado->NOMBRES}}">
        <input type="hidden" id="{{$empleado->COD_EMPLEADO}}mail" value="{{$empleado->EMAIL}}">
        
      @endforeach
  </div>
</a> 
 

 <script type="text/javascript">
  $(document).ready(function(){
     var escuela=$('#esc').val();
     var tipoReporte=$('#tipoReporte').val();
      $("a").click(function(e){
          e.preventDefault();
          var empleado = $(this).attr('id');
          var ci=$('#'+empleado+'ci').val();
          var nombres=$('#'+empleado+'nombres').val();
          var mail=$('#'+empleado+'mail').val();

          var fecha1=$('#fecha1').val();
          var fecha2=$('#fecha2').val();
          var escuela=$('#escuela').val();
          var proceso=$('#proceso').val();
          var objeto=$('#objeto').val();
          var macro=$('#macro').val();
          var peso=$('#peso').val();
        //var consult = $("#busqueda").val();
           $("#displayBox").load("../../../../../../listadoBalance",
            {escuela: escuela,empleado:empleado,ci:ci,nombres:nombres,fecha1:fecha1,fecha2:fecha2,proceso:proceso,objeto:objeto,macro:macro,peso:peso}
           );
});

  });

</script>             



