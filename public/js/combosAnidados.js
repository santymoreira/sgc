	 $(document).ready(function(){
  	$('#combo1').change(function(e){
      //e.preventDefault();
       var tipoEmpleado=$(this).val();
       var escuela=$('#esc').val();
       var cedula=$('#cedula').val();
       var codigo=$('#codigo').val();
       var tipoReporte=$('#tipoReporte').val();
       var name=$('#name').val();
       var mail=$('#mail').val();
       //alert (name);

           $("#contenido").load("../../../combo1",
            {tipoEmpleado: tipoEmpleado,escuela: escuela,cedula:cedula,codigo:codigo,name:name,mail:mail,tipoReporte:tipoReporte}
            );
});

  });


