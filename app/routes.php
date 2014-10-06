<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    //return View::make('hello');
    return Redirect::to('home/welcome');
});

// esta sera la ruta principal de nuestra aplicación
// aquí va a estar el formulario para registrase y para inicio de sesión
// esta ruta debe ser publica y por lo tanto no debe llegar el filtro auth
// 

Route::get('login', function(){
    return View::make('home.welcome'); 
});

Route::get('logout', array('uses' => 'EmpleadosController@logout'));


// esta ruta sera para crear al usuario 
Route::post('registro', function(){
 
    $input = Input::all();
    
    // al momento de crear el usuario la clave debe ser encriptada
    // para utilizamos la función estática make de la clase Hash
    // esta función encripta el texto para que sea almacenado de manera segura
    $input['password'] = Hash::make($input['password']);
 
    Empleado::create($input);
 
    return Redirect::to('login')->with('mensaje_registro', 'Usuario Registrado');
});

// esta ruta servirá para iniciar la sesión por medio del correo y la clave 
// para esto utilizamos la función estática attemp de la clase Auth
// esta función recibe como parámetro un arreglo con el correo y la clave
Route::post('layout', function(){
 
    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 
    if (Auth::attempt( array('CI' => Input::get('username'), 'password' => Input::get('password') ), true )){

        $tipos=DB::select('SELECT et.COD_TIPO FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE e.CI ='.Input::get('username').';');
            # code...
        $pA=0; $pF=0; $pT=0; $pE=0;$pFinal=0;
            foreach ($tipos as $tipo) {
              $tipoE=$tipo->COD_TIPO;
              if ($tipoE==1 || $tipoE==2) { $pE=1; }
              if ($tipoE==3 || $tipoE==4) { $pT=1; }
              if ($tipoE==5 || $tipoE==6) { $pF=1; }
              if ($tipoE==10) { $pA=1; }
            }
        if ($pA==1) {
          $pFinal=1;
        }elseif ($pF==1) {
          $pFinal=2;
        }elseif ($pE==1) {
          $pFinal=3;
        }else{
          $pFinal=4;
        }
        #1:administrador
        #2:facultad
        #3:escuela
        #4:empleado
        
//        Session::put('tipo', $tipo);
        Session::put('tipo', $pFinal);
        Session::put('intervalo', 1);
        Session::put('inicio', time());
        //echo("<script>console.log('PHP: ".Session::get('inicio')."');</script>");

        return Redirect::to('home')->with('mensaje_login', Auth::user()->CI);
        //return Redirect::to('home')->with('mensaje_login', json_encode($tipo));
    }else{
        return Redirect::to('home')->with('mensaje_login', 'Ingreso invalido');
    }

 
});

// Por ultimo crearemos un grupo con el filtro auth. 
// Para todas estas rutas el usuario debe haber iniciado sesión. 
// En caso de que se intente entrar y el usuario haya iniciado session 
// entonces sera redirigido a la ruta login
Route::group(array('before' => 'auth'), function()
{
    Route::get('inicio', function(){
        echo 'Bienvenido ';
        
        // Con la función Auth::user() podemos obtener cualquier dato del usuario 
        // que este en la sesión, en este caso usamos su correo y su id
        // Esta función esta disponible en cualquier parte del código
        // siempre y cuando haya un usuario con sesión iniciada
        echo 'Bienvenido '. Auth::user()->nombres . ', su Id es: '.Auth::user()->CI ;

    });    
});

#envia los parámetros para la evaluación (primer paso)
Route::get('evaluacion/{a}/{b}/{c}/{d}/{e}/{f}/{g}', array('uses' => 'EmpleadosController@encabezadoEvaluacion'));
Route::post('/contenidoEvaluacion', array('uses' => 'EmpleadosController@contenidoEvaluacion'));
Route::post('/insertar', array('uses' => 'EmpleadosController@insertar'));
#fin evaluación

  //reporte individual
  Route::get('reportes/individual/{e}/{t}', 'ReportesController@individual');
    //reporte con busqueda
  Route::get('reportes/mensualE/{cod}/{tipo}', 'ReportesController@mensualE');



Route::get('evaluacionBalance/{a}/{b}/{c}/{d}/{e}/{f}', array('uses' => 'EmpleadosController@mostrarEmpBalance'));


Route::get('login', function(){
    return View::make('home.welcome'); 
});

//Route::get('home', array('uses' => 'HomeController@showWelcome'));
Route::get('home/welcome', 'HomeController@showWelcome');

//Route::get('empleados', array('uses' => 'EmpleadosController@mostrarEmp'));

Route::get('empleados', array('uses' => 'EmpleadosController@mostrarEmpleados'));
//
//Route::get('empleados',function(){
  //return Redirect::to_route('home');

  //array('uses' => 'EmpleadosController@mostrarEmpleados'
//});
Route::post('/upload', function(){
     if(Input::hasFile('archivo')) {

          Input::file('archivo')
               ->move('carpetasArchivos', Input::get('id'));
     }
     return Redirect::back();
});

//

Route::post('empleados/crear', array('uses' => 'EmpleadosController@crearEmpleado'));


//rutas para la evaluacion de empleados
//Route::get('evaluacion/{a}/{b}/{c}/{d}/{e}/{f}/{g}', array('uses' => 'EmpleadosController@mostrarEmp'));
//
Route::get('consolidado/{a}/{b}', array('uses' => 'ReportesController@imagenReporteConsolidado'));
Route::get('consolidadoFacultad', array('uses' => 'ReportesController@imagenReporteConsolidadoFacultad'));
Route::get('consolidadoEscuela/{a}', array('uses' => 'ReportesController@imagenReporteConsolidadoEscuela'));

Route::post('/busquedaBalance', array('uses' => 'EmpleadosController@busquedaBalance'));
Route::post('/textoBusquedaBalance', array('uses' => 'EmpleadosController@textoBusquedaBalance'));
Route::post('/listadoBalance', array('uses' => 'EmpleadosController@listadoBalance'));
Route::post('/listadoBalance2', array('uses' => 'EmpleadosController@listadoBalance2'));
Route::post('/insertarBalance', array('uses' => 'EmpleadosController@insertarBalance'));

Route::get('/evaluacionEmpleado', array('uses' => 'EmpleadosController@evaluacionEmpleado'));
//
//

Route::get('/pruebav01', array('uses' => 'EmpleadosController@mostrarEmp'));
Route::get('/datos', array('uses' => 'HomeController@envios_ajax'));



  Route::post('/individualBusqueda', 'ReportesController@individualBusqueda');

  //reporte mensual
  //Route::get('reportes/mensual/{cod}/{tipo}', 'ReportesController@mensual');


  Route::post('/buscarEmpleado', 'ReportesController@buscarEmpleado');
//Route::get('/tipos', array('uses' => 'ReportesController@mostrarTipo'));
Route::post('/combo1', array('uses' => 'ReportesController@combo1'));
Route::post('/combo2', array('uses' => 'ReportesController@combo2'));
Route::post('/tabla',array('uses' => 'ReportesController@tabla'));
Route::get('/imagenReporteMensual/{escuela}/{macroproceso}/{proceso}/{mes}/{cedula}/{codigo}/{suma}/{op}',array('uses' => 'ReportesController@imagenReporteMensual'));
Route::get('/imagenReporte/{escuela}/{macroproceso}/{proceso}/{f1}/{f2}/{cedula}/{codigo}/{op}',array('uses' => 'ReportesController@imagenReporte'));

Route::get('/pdfReporte/{a}/{b}/{c}/{d}/{e}/{f}/{g}/{h}/{i}',array('uses' => 'ReportesController@pdfReporte'));
Route::get('/pdfReporteMensual/{a}/{b}/{c}/{d}/{e}/{f}/{g}/{h}/{i}',array('uses' => 'ReportesController@pdfReporteMensual'));

//Controllers Escuela programmer.

//Controllers Escuela programmer.

//Facultad Administración de Empresas

Route::get('home/welcome', 'FadeController@home');
Route::get('fade/fade_sgc', 'FadeController@fadesgc');
Route::get('fade/macroprocesos', 'FadeController@macroprocesos');
Route::get('fade/MF_Administrativa', 'FadeController@administrativa');
Route::get('fade/MF_Academica', 'FadeController@academica');
Route::get('fade/MF_Calidad', 'FadeController@calidad');
Route::get('fade/MF_Docencia', 'FadeController@docencia');
Route::get('fade/MF_Investigacion', 'FadeController@investigacion');
Route::get('fade/MF_Vinculacion', 'FadeController@vinculacion');
Route::get('fade/MF_Asistencia', 'FadeController@asistencia');
Route::get('fade/MF_Academico', 'FadeController@academico');
Route::get('fade/MF_Financiero', 'FadeController@financiero');
Route::get('fade/MF_Mantenimiento', 'FadeController@mantenimiento');
Route::get('fade/MF_Transporte', 'FadeController@transporte');
Route::get('fade/MF_Informatico', 'FadeController@informatico');

//Escuela de Contabilidad y Auditoria
Route::get('home/welcome', 'MapasController@home');  
Route::get('contabilidad/cont_audi_sgc', 'MapasController@contabilidadsgc');
Route::get('contabilidad/macroprocesos', 'MapasController@macroprocesos');
Route::get('contabilidad/M_Administrativa', 'MapasController@administrativa');
Route::get('contabilidad/M_Academica', 'MapasController@academica');
Route::get('contabilidad/M_Docencia', 'MapasController@docencia');
Route::get('contabilidad/M_Investigacion', 'MapasController@investigacion');
Route::get('contabilidad/M_Vinculacion', 'MapasController@vinculacion');
Route::get('contabilidad/M_Asistencia', 'MapasController@asistencia');
Route::get('contabilidad/M_Mantenimiento', 'MapasController@mantenimiento');

//Escuela de Educación a Distancia
Route::get('home/welcome', 'MapasController@home');  
Route::get('E_distancia/distancia_sgc', 'MapasController@distanciasgc');
Route::get('E_distancia/macroprocesos', 'MapasController@macroprocesos');
Route::get('E_distancia/M_Administrativa', 'MapasController@administrativa');
Route::get('E_distancia/M_Academica', 'MapasController@academica');
Route::get('E_distancia/M_Docencia', 'MapasController@docencia');
Route::get('E_distancia/M_Investigacion', 'MapasController@investigacion');
Route::get('E_distancia/M_Vinculacion', 'MapasController@vinculacion');
Route::get('E_distancia/M_Asistencia', 'MapasController@asistencia');
Route::get('E_distancia/M_Mantenimiento', 'MapasController@mantenimiento');

//Escuela de Administración de Empresas
Route::get('home/welcome', 'MapasController@home');  
Route::get('empresas/empresas_sgc', 'MapasController@empresasgc');
Route::get('empresas/macroprocesos', 'MapasController@macroprocesos');
Route::get('empresas/M_Administrativa', 'MapasController@administrativa');
Route::get('empresas/M_Academica', 'MapasController@academica');
Route::get('empresas/M_Docencia', 'MapasController@docencia');
Route::get('empresas/M_Investigacion', 'MapasController@investigacion');
Route::get('empresas/M_Vinculacion', 'MapasController@vinculacion');
Route::get('empresas/M_Asistencia', 'MapasController@asistencia');
Route::get('empresas/M_Mantenimiento', 'MapasController@mantenimiento');

//Escuela de Comercio Exterior
Route::get('home/welcome', 'MapasController@home');
Route::get('C_exterior/exterior_sgc', 'MapasController@exteriorsgc');
Route::get('C_exterior/macroprocesos', 'MapasController@macroprocesos');
Route::get('C_exterior/M_Administrativa', 'MapasController@administrativa');
Route::get('C_exterior/M_Academica', 'MapasController@academica');
Route::get('C_exterior/M_Docencia', 'MapasController@docencia');
Route::get('C_exterior/M_Investigacion', 'MapasController@investigacion');
Route::get('C_exterior/M_Vinculacion', 'MapasController@vinculacion');
Route::get('C_exterior/M_Asistencia', 'MapasController@asistencia');
Route::get('C_exterior/M_Mantenimiento', 'MapasController@mantenimiento');


//Escuela de Finanzas
Route::get('home/welcome', 'MapasController@home');
Route::get('finanzas/finanzas_sgc', 'MapasController@finanzasgc');
Route::get('finanzas/macroprocesos', 'MapasController@macroprocesos');
Route::get('finanzas/M_Administrativa', 'MapasController@administrativa');
Route::get('finanzas/M_Academica', 'MapasController@academica');
Route::get('finanzas/M_Docencia', 'MapasController@docencia');
Route::get('finanzas/M_Investigacion', 'MapasController@investigacion');
Route::get('finanzas/M_Vinculacion', 'MapasController@vinculacion');
Route::get('finanzas/M_Asistencia', 'MapasController@asistencia');
Route::get('finanzas/M_Mantenimiento', 'MapasController@mantenimiento');

//Escuela de Marketing
Route::get('home/welcome', 'MapasController@home');
Route::get('marketing/marketing_sgc', 'MapasController@marketingsgc');
Route::get('marketing/macroprocesos', 'MapasController@macroprocesos');
Route::get('marketing/M_Administrativa', 'MapasController@administrativa');
Route::get('marketing/M_Academica', 'MapasController@academica');
Route::get('marketing/M_Docencia', 'MapasController@docencia');
Route::get('marketing/M_Investigacion', 'MapasController@investigacion');
Route::get('marketing/M_Vinculacion', 'MapasController@vinculacion');
Route::get('marketing/M_Asistencia', 'MapasController@asistencia');
Route::get('marketing/M_Mantenimiento', 'MapasController@mantenimiento');

//Escuela de Gestión de Transporte
Route::get('home/welcome', 'MapasController@home');
Route::get('transporte/transporte_sgc', 'MapasController@transportesgc');
Route::get('transporte/macroprocesos', 'MapasController@macroprocesos'); 
Route::get('transporte/M_Administrativa', 'MapasController@administrativa');
Route::get('transporte/M_Academica', 'MapasController@academica');
Route::get('transporte/M_Docencia', 'MapasController@docencia');
Route::get('transporte/M_Investigacion', 'MapasController@investigacion');
Route::get('transporte/M_Vinculacion', 'MapasController@vinculacion');
Route::get('transporte/M_Asistencia', 'MapasController@asistencia');
Route::get('transporte/M_Mantenimiento', 'MapasController@mantenimiento');


//Balanced Score Card

//Balanced Contabilidad y Auditoría 
Route::get('home/welcome', 'MapasController@home');
Route::get('contabilidad/cont_audi_bsc', 'MapasBalancedController@cont_audi_bsc');
Route::get('contabilidad/perspectivas', 'MapasBalancedController@perspectivas');
Route::get('contabilidad/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('contabilidad/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('contabilidad/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('contabilidad/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('contabilidad/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('contabilidad/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('contabilidad/ImpleModContem', 'MapasBalancedController@ImpleModContem');  
Route::get('contabilidad/DesarrCentrosApoyo', 'MapasBalancedController@DesarrCentrosApoyo'); 
Route::get('contabilidad/PromvProyecSoc', 'MapasBalancedController@PromvProyecSoc');
Route::get('contabilidad/FortaCapRRHH', 'MapasBalancedController@FortaCapRRHH'); 
Route::get('contabilidad/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('contabilidad/PromoCoop', 'MapasBalancedController@PromoCoop');
Route::get('contabilidad/OptimiRecu', 'MapasBalancedController@OptimiRecu');
Route::get('contabilidad/ObtenerFinan', 'MapasBalancedController@ObtenerFinan');



//Balanced Empresas
Route::get('home/welcome', 'MapasController@home');
Route::get('empresas/empresas_bsc', 'MapasBalancedController@empresas_bsc');
Route::get('empresas/perspectivas', 'MapasBalancedController@perspectivas');
Route::get('empresas/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('empresas/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('empresas/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('empresas/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('empresas/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('empresas/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('empresas/ImpleModContem', 'MapasBalancedController@ImpleModContem');  
Route::get('empresas/DesarrCentrosApoyo', 'MapasBalancedController@DesarrCentrosApoyo'); 
Route::get('empresas/PromvProyecSoc', 'MapasBalancedController@PromvProyecSoc');
Route::get('empresas/FortaCapRRHH', 'MapasBalancedController@FortaCapRRHH'); 
Route::get('empresas/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('empresas/PromoCoop', 'MapasBalancedController@PromoCoop');
Route::get('empresas/OptimiRecu', 'MapasBalancedController@OptimiRecu');
Route::get('empresas/ObtenerFinan', 'MapasBalancedController@ObtenerFinan');


//Balanced finanzas
Route::get('home/welcome', 'MapasController@home');
Route::get('finanzas/finanzas_bsc', 'MapasBalancedController@finanzas_bsc');
Route::get('finanzas/perspectivas', 'MapasBalancedController@perspectivas');
Route::get('finanzas/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('finanzas/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('finanzas/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('finanzas/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('finanzas/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('finanzas/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('finanzas/ImpleModContem', 'MapasBalancedController@ImpleModContem');  
Route::get('finanzas/DesarrCentrosApoyo', 'MapasBalancedController@DesarrCentrosApoyo'); 
Route::get('finanzas/PromvProyecSoc', 'MapasBalancedController@PromvProyecSoc');
Route::get('finanzas/FortaCapRRHH', 'MapasBalancedController@FortaCapRRHH'); 
Route::get('finanzas/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('finanzas/PromoCoop', 'MapasBalancedController@PromoCoop');
Route::get('finanzas/OptimiRecu', 'MapasBalancedController@OptimiRecu');
Route::get('finanzas/ObtenerFinan', 'MapasBalancedController@ObtenerFinan');


//Balanced marketing
Route::get('home/welcome', 'MapasController@home');
Route::get('marketing/marketing_bsc', 'MapasBalancedController@marketing_bsc');
Route::get('marketing/perspectivas', 'MapasBalancedController@perspectivas'); 
Route::get('marketing/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('marketing/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('marketing/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('marketing/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('marketing/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('marketing/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('marketing/ImpleModContem', 'MapasBalancedController@ImpleModContem');  
Route::get('marketing/DesarrCentrosApoyo', 'MapasBalancedController@DesarrCentrosApoyo'); 
Route::get('marketing/PromvProyecSoc', 'MapasBalancedController@PromvProyecSoc');
Route::get('marketing/FortaCapRRHH', 'MapasBalancedController@FortaCapRRHH'); 
Route::get('marketing/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('marketing/PromoCoop', 'MapasBalancedController@PromoCoop');
Route::get('marketing/OptimiRecu', 'MapasBalancedController@OptimiRecu');
Route::get('marketing/ObtenerFinan', 'MapasBalancedController@ObtenerFinan');

//Balanced transporte
Route::get('home/welcome', 'MapasController@home');
Route::get('transporte/transporte_bsc', 'MapasBalancedController@transporte_bsc');
Route::get('transporte/perspectivas', 'MapasBalancedController@perspectivas'); 
Route::get('transporte/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('transporte/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('transporte/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('transporte/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('transporte/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('transporte/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('transporte/ImpleModContem', 'MapasBalancedController@ImpleModContem');  
Route::get('transporte/DesarrCentrosApoyo', 'MapasBalancedController@DesarrCentrosApoyo'); 
Route::get('transporte/PromvProyecSoc', 'MapasBalancedController@PromvProyecSoc');
Route::get('transporte/FortaCapRRHH', 'MapasBalancedController@FortaCapRRHH'); 
Route::get('transporte/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('transporte/PromoCoop', 'MapasBalancedController@PromoCoop');
Route::get('transporte/OptimiRecu', 'MapasBalancedController@OptimiRecu');
Route::get('transporte/ObtenerFinan', 'MapasBalancedController@ObtenerFinan');



//Administración de Empleados

Route::get('users/empleados/{cod}', 'UserController@listado');

//Guardar Empleado
Route::get('users/create', 'UserController@newuser');
Route::post('users/store/{esc}','UserController@store');

//Editar Empleado
Route::get('users/edit/{cod},{esc}', 'UserController@edit');
Route::post('users/update/{cod},{esc}','UserController@update');

//Eliminar Empleado
Route::get('users/destroy/{cod},{esc}','UserController@destroy');

//Mostrar un empleado
  Route::get('users/show/{cod},{esc}', 'UserController@show');

//Reportes 
Route::get('/reportes','ReportesController@Show_reportes');
//Reporte Individual

//Creditos
Route::get('Creditos','MapasController@creditos');
