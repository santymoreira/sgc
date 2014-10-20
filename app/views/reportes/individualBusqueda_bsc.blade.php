</br></br></br>
	<label><b>CI: </b></label> {{$cedula}} </br></br>
	<label><b>NOMBRES: </b></label> {{ $nombre}} </br></br>

<div  id="contenido">
  <label><b>PERSPECTIVA: </b></label>
  <select id="combo2" class="select" style="width: 200px;">
    <option value="1" selected>Seleccione opción</option>
      @foreach ($macroprocesos as $tipo)
    <option value="{{ $tipo->OBJETIVO }}">{{ $tipo->DESCRIPCION }}</option>
      @endforeach
  </select>
</div>


<center><h1> Indicadores </h1></center>


<input type="hidden" id="esc" value="{{ $escuela }}">
<input type="hidden" id="codigo" value="{{ $empleado }}">
<input type="hidden" id="ci" value="{{ $cedula }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">
<input type="hidden" id="nombre" value="{{ $nombre }}">
<input type="hidden" id="mail" value="{{ $mail }}">

<script type="text/javascript">
		 $(document).ready(function(){
  	$('#combo1').change(function(e){
      e.preventDefault();
       var tipoEmpleado=$(this).val();
       var escuela=$('#esc').val();
       var codigo=$('#codigo').val();
       var ci=$('#ci').val();
       var tipoReporte=$('#tipoReporte').val();
       var nombres=$('#nombre').val();
       var mail=$('#mail').val();

           $("#contenido").load("../../../combo2_bsc",
            {tipoEmpleado: tipoEmpleado,escuela: escuela,tipoReporte:tipoReporte,codigo:codigo,cedula:ci,name:nombres,mail:mail}
            );

});

  });



</script>
 
