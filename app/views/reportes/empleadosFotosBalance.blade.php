
  {{ HTML::script('js/jquery-1.8.2.min.js'); }}


<input type="hidden" id="esc" value="{{ $escuela }}">
<input type="hidden" id="tipoReporte" value="{{ $tipoReporte }}">
<div id="contenido">
  @foreach ($empleados as $empleado)
<a id="{{$empleado->COD_EMPLEADO}}"> 
  <div id="displayBox" align="left" >
        <img src="{{ asset('images/fotoreal.jpg'); }}" width="30" height="30" />
        <font color="#0B0B61"><b>{{$empleado->NOMBRES}}</b></font>
        <input type="hidden" id="{{$empleado->COD_EMPLEADO}}ci" value="{{$empleado->CI}}">
        <input type="hidden" id="{{$empleado->COD_EMPLEADO}}nombres" value="{{$empleado->NOMBRES}}">
        <input type="hidden" id="{{$empleado->COD_EMPLEADO}}mail" value="{{$empleado->EMAIL}}">
      @endforeach
  </div>
</a> 

</div>



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
        //var consult = $("#busqueda").val();
           $("#displayBox").load("../../../individualBusquedaBalance",
            {escuela: escuela,empleado:empleado,ci:ci,nombres:nombres,mail:mail,tipoReporte:tipoReporte}
           );
});

  });

</script>             



