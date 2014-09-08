	 $(document).ready(function(){
  	$('#combo1').change(function(e){
      e.preventDefault();
       var tipoEmpleado=$(this).val();
       var escuela=$('#esc').val();

           $("#contenido").load("../../combo1",
            {tipoEmpleado: tipoEmpleado,escuela: escuela}
            );

});

  });


