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
        $('#avance').load("Vista/ReportesIndicadores/pChart2.1.4/examples/AvanceFADE.php") ;

        $('#GestiondeCalidad').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
    
//    $('#avance').load("Vista/ReportesIndicadores/pChart2.1.4/examples/AvanceFADE.php") ;
    $('#login').click(function(){
        var username=$('#username').val();
        var password=$('#password').val();
        var box = $('#loginBox');
        var parametros = {
                "valorCaja1" : username,
                "valorCaja2" : password
        };
        $.ajax({
                data:  parametros,
                url:   'login.php',
                type:  'post',
                beforeSend: function () {
                        //$("#log").html("Procesando, espere por favor...");
                },
                success:  function (response ) {
                    if (response==-1)
                       {
                         smoke.alert('Credenciales incorrectas, inténtelo de nuevo')
                       }
                       else
                       {
                           location.reload();
                       }

                }
        });

   
    });
