	 $(document).ready(function(){
  	$('#combo1').change(function(e){
      e.preventDefault();
       var opcion=$(this).val();

           $("#contenido").load("../../combo1",
            {op: opcion}
            );

});

  });


