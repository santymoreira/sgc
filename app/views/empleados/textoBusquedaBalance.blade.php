
  <div id="buscador">
    <b><font color="#000000"> Buscar:</font> </b>
    <input style="width:300px;" id="busqueda" type="text" name="buscar" placeholder="Buscar Empleados..." />
	<div id="resultado"></div>
  </div>

<input type="hidden" id="f1" value="{{ $f1 }}">
<input type="hidden" id="f2" value="{{ $f2 }}">
<input type="hidden" id="macro" value="{{ $macro }}">
<input type="hidden" id="escuela" value="{{ $escuela }}">
<input type="hidden" id="proceso" value="{{ $proceso }}">
<input type="hidden" id="objeto" value="{{ $objeto }}">
<input type="hidden" id="peso" value="{{ $peso }}">

<script type="text/javascript">
	$(document).ready(function(){
    var escuela=$('#esc').val();
		
		$("#busqueda").focus();
  		$("#busqueda").keyup(function(e){
  			var consult = $("#busqueda").val();
        var f1=$("#f1").val();
        var f2=$("#f2").val();
        var macro=$("#macro").val();
        var escuela=$("#escuela").val();
        var proceso=$("#proceso").val();
        var objeto=$("#objeto").val();
        var peso=$("#peso").val();
	      	e.preventDefault();

           $("#resultado").load("../../../../../../busquedaBalance",
            {consult: consult,f1:f1,f2:f2,macro:macro,escuela:escuela,proceso:proceso,objeto:objeto,peso:peso}
            );

});
      $('#back').click(function(e)
      {
        //alert('sale');
      });

  });

</script>

