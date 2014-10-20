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

Route::get('/', 'HomeController@showWelcome' );

    //return View::make('hello');
   // return Redirect::to('home/welcome');
    
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

        return Redirect::to('home/welcome');//->with('mensaje_login', Auth::user()->CI);
        //return Redirect::to('home')->with('mensaje_login', json_encode($tipo));
    }else{
        //return Redirect::to('home/welcome')->with('mensaje_login', 'incorrecto');
        return Redirect::to('home/welcome')->with('mensaje_login','incorrecto');
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

  Route::get('reportes/individual_bsc/{e}/{t}', 'ReportesController@individual_bsc');
    //reporte con busqueda
  Route::get('reportes/mensualE_bsc/{cod}/{tipo}', 'ReportesController@mensualE_bsc');



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
     if(Input::hasFile('photo')) {

          Input::file('photo')->move('carpetasArchivos', Input::get('id').".pdf");
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
Route::get('consolidadoEscuela_bsc/{a}', array('uses' => 'ReportesController@imagenReporteConsolidadoEscuela_bsc'));

Route::post('/busquedaBalance', array('uses' => 'EmpleadosController@busquedaBalance'));
Route::post('/textoBusquedaBalance', array('uses' => 'EmpleadosController@textoBusquedaBalance'));
Route::post('/listadoBalance', array('uses' => 'EmpleadosController@listadoBalance'));
Route::post('/listadoBalance2', array('uses' => 'EmpleadosController@listadoBalance2'));
Route::post('/insertarBalance', array('uses' => 'EmpleadosController@insertarBalance'));

Route::get('/evaluacionEmpleado', array('uses' => 'EmpleadosController@evaluacionEmpleado'));
//

Route::get('/pruebav01', array('uses' => 'EmpleadosController@mostrarEmp'));
Route::get('/datos', array('uses' => 'HomeController@envios_ajax'));



  Route::post('/individualBusqueda', 'ReportesController@individualBusqueda');
  Route::post('/individualBusquedaBalance', 'ReportesController@individualBusquedaBalance');
  //Route::post('/individualBusquedaBalance', 'ReportesController@individualBusquedaBalance');


Route::post('/buscarEmpleado', 'ReportesController@buscarEmpleado');
Route::post('/buscarEmpleadoBalance', 'ReportesController@buscarEmpleadoBalance');
//Route::get('/tipos', array('uses' => 'ReportesController@mostrarTipo'));
Route::post('/combo1', array('uses' => 'ReportesController@combo1'));
//Route::post('/combo1_bsc', array('uses' => 'ReportesController@combo1'));
Route::post('/combo2', array('uses' => 'ReportesController@combo2'));
Route::post('/combo2_bsc', array('uses' => 'ReportesController@combo2_bsc'));
Route::post('/tabla',array('uses' => 'ReportesController@tabla'));
Route::post('/tabla_bsc',array('uses' => 'ReportesController@tabla_bsc'));
Route::get('/imagenReporteMensual/{escuela}/{macroproceso}/{proceso}/{mes}/{cedula}/{codigo}/{suma}/{op}',array('uses' => 'ReportesController@imagenReporteMensual'));
Route::get('/imagenReporteMensualBalance/{escuela}/{macroproceso}/{proceso}/{mes}/{cedula}/{codigo}/{suma}/{op}',array('uses' => 'ReportesController@imagenReporteMensualBalance'));
Route::get('/imagenReporte/{escuela}/{macroproceso}/{proceso}/{f1}/{f2}/{cedula}/{codigo}/{op}',array('uses' => 'ReportesController@imagenReporte'));
Route::get('/imagenReporteBalance/{escuela}/{macroproceso}/{proceso}/{f1}/{f2}/{cedula}/{codigo}/{op}',array('uses' => 'ReportesController@imagenReporteBalance'));

Route::get('/pdfReporte/{a}/{b}/{c}/{d}/{e}/{f}/{g}/{h}/{i}',array('uses' => 'ReportesController@pdfReporte'));
Route::get('/pdfReporteBalance/{a}/{b}/{c}/{d}/{e}/{f}/{g}/{h}/{i}',array('uses' => 'ReportesController@pdfReporteBalance'));
Route::get('/pdfReporteMensual/{a}/{b}/{c}/{d}/{e}/{f}/{g}/{h}/{i}',array('uses' => 'ReportesController@pdfReporteMensual'));
Route::get('/pdfReporteMensualBalance/{a}/{b}/{c}/{d}/{e}/{f}/{g}/{h}/{i}',array('uses' => 'ReportesController@pdfReporteMensualBalance'));

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
Route::get('contabilidadbsc/cont_audi_bsc', 'MapasBalancedController@cont_audi_bsc');
Route::get('contabilidadbsc/perspectivas', 'MapasBalancedController@perspectivas');
Route::get('contabilidadbsc/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('contabilidadbsc/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('contabilidadbsc/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('contabilidadbsc/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('contabilidadbsc/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('contabilidadbsc/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('contabilidadbsc/PotenVincSociedad', 'MapasBalancedController@PotenVincSociedad');  
Route::get('contabilidadbsc/ImplenGestionProc', 'MapasBalancedController@ImplenGestionProc');
Route::get('contabilidadbsc/FortaCapDoc', 'MapasBalancedController@FortaCapDocentes'); 
Route::get('contabilidadbsc/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('contabilidadbsc/OptimiRecu', 'MapasBalancedController@OptimiRecu');




//Balanced Empresas
Route::get('home/welcome', 'MapasController@home');
Route::get('empresasbsc/empresas_bsc', 'MapasBalancedController@empresas_bsc');
Route::get('empresasbsc/perspectivas', 'MapasBalancedController@perspectivas');
Route::get('empresasbsc/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('empresasbsc/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('empresasbsc/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('empresasbsc/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('empresasbsc/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('empresasbsc/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('empresasbsc/PotenVincSociedad', 'MapasBalancedController@PotenVincSociedad');  
Route::get('empresasbsc/ImplenGestionProc', 'MapasBalancedController@ImplenGestionProc');
Route::get('empresasbsc/FortaCapDoc', 'MapasBalancedController@FortaCapDocentes'); 
Route::get('empresasbsc/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('empresasbsc/OptimiRecu', 'MapasBalancedController@OptimiRecu');



//Balanced finanzas
Route::get('home/welcome', 'MapasController@home');
Route::get('finanzasbsc/finanzas_bsc', 'MapasBalancedController@finanzas_bsc');
Route::get('finanzasbsc/perspectivas', 'MapasBalancedController@perspectivas');
Route::get('finanzasbsc/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('finanzasbsc/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('finanzasbsc/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('finanzasbsc/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('finanzasbsc/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('finanzasbsc/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('finanzasbsc/PotenVincSociedad', 'MapasBalancedController@PotenVincSociedad');  
Route::get('finanzasbsc/ImplenGestionProc', 'MapasBalancedController@ImplenGestionProc');
Route::get('finanzasbsc/FortaCapDoc', 'MapasBalancedController@FortaCapDocentes'); 
Route::get('finanzasbsc/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('finanzasbsc/OptimiRecu', 'MapasBalancedController@OptimiRecu');



//Balanced marketing
Route::get('home/welcome', 'MapasController@home');
Route::get('marketingbsc/marketing_bsc', 'MapasBalancedController@marketing_bsc');
Route::get('marketingbsc/perspectivas', 'MapasBalancedController@perspectivas'); 
Route::get('marketingbsc/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('marketingbsc/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('marketingbsc/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('marketingbsc/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('marketingbsc/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('marketingbsc/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('marketingbsc/PotenVincSociedad', 'MapasBalancedController@PotenVincSociedad');  
Route::get('marketingbsc/ImplenGestionProc', 'MapasBalancedController@ImplenGestionProc');
Route::get('marketingbsc/FortaCapDoc', 'MapasBalancedController@FortaCapDocentes'); 
Route::get('marketingbsc/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('marketingbsc/OptimiRecu', 'MapasBalancedController@OptimiRecu');


//Balanced transporte
Route::get('home/welcome', 'MapasController@home');
Route::get('transportebsc/transporte_bsc', 'MapasBalancedController@transporte_bsc');
Route::get('transportebsc/perspectivas', 'MapasBalancedController@perspectivas'); 
Route::get('transportebsc/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('transportebsc/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('transportebsc/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('transportebsc/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('transportebsc/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('transportebsc/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('transportebsc/PotenVincSociedad', 'MapasBalancedController@PotenVincSociedad');  
Route::get('transportebsc/ImplenGestionProc', 'MapasBalancedController@ImplenGestionProc');
Route::get('transportebsc/FortaCapDoc', 'MapasBalancedController@FortaCapDocentes'); 
Route::get('transportebsc/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('transportebsc/OptimiRecu', 'MapasBalancedController@OptimiRecu');


Route::get('home/welcome', 'MapasController@home');
Route::get('fadebsc/fade_bsc', 'MapasBalancedController@fade_bsc');
Route::get('fadebsc/perspectivas', 'MapasBalancedController@perspectivas'); 
Route::get('fadebsc/PotenInves', 'MapasBalancedController@PotenInves');  
Route::get('fadebsc/AcredCarr', 'MapasBalancedController@AcredCarr'); 
Route::get('fadebsc/AumentarSatis', 'MapasBalancedController@AumentarSatis');  
Route::get('fadebsc/FortaInterApre', 'MapasBalancedController@FortaInterApre');  
Route::get('fadebsc/ImpleSgc', 'MapasBalancedController@ImpleSgc');  
Route::get('fadebsc/PotenInnov', 'MapasBalancedController@PotenInnov');  
Route::get('fadebsc/PotenVincSociedad', 'MapasBalancedController@PotenVincSociedad');  
Route::get('fadebsc/ImplenGestionProc', 'MapasBalancedController@ImplenGestionProc');
Route::get('fadebsc/FortaCapDoc', 'MapasBalancedController@FortaCapDocentes'); 
Route::get('fadebsc/MejorarClimaLab', 'MapasBalancedController@MejorarClimaLab'); 
Route::get('fadebsc/OptimiRecu', 'MapasBalancedController@OptimiRecu');



//Administración de Empleados

Route::get('users/empleados/{cod}', 'UserController@listado');

//Guardar Empleado
Route::get('users/create', 'UserController@newuser');
Route::post('users/store/{esc}','UserController@store');

//Editar Empleado
Route::get('users/editp/{cod}', 'UserController@editp');
Route::post('users/updatep/{cod}','UserController@updatep');

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



//Redirect en URL

//SGC
Route::get('finanzas', function()
{
    //return View::make('hello');
    return Redirect::to('finanzas/finanzas_sgc');
});
Route::get('finanzas/', function()
{
    //return View::make('hello');
    return Redirect::to('finanzas/finanzas_sgc');
});
Route::get('empresas', function()
{
    //return View::make('hello');
    return Redirect::to('empresas/empresas_sgc');
});
Route::get('empresas/', function()
{
    //return View::make('hello');
    return Redirect::to('empresas/empresas_sgc');
});
Route::get('fade', function()
{
    //return View::make('hello');
    return Redirect::to('fade/fade_sgc');
});
Route::get('fade/', function()
{
    //return View::make('hello');
    return Redirect::to('fade/fade_sgc');
});
Route::get('contabilidad', function()
{  
    //return View::make('hello');
    return Redirect::to('contabilidad/cont_audi_sgc');
});
Route::get('contabilidad/', function()
{  
    //return View::make('hello');
    return Redirect::to('contabilidad/cont_audi_sgc');
});
Route::get('C_exterior', function()
{
    //return View::make('hello');
    return Redirect::to('C_exterior/exterior_sgc');
});
Route::get('C_exterior/', function()
{
    //return View::make('hello');
    return Redirect::to('C_exterior/exterior_sgc');
});
Route::get('marketing', function()
{
    //return View::make('hello');
    return Redirect::to('marketing/marketing_sgc');
});
Route::get('marketing/', function()
{
    //return View::make('hello');
    return Redirect::to('marketing/marketing_sgc');
});
Route::get('transporte', function()
{
    //return View::make('hello');
    return Redirect::to('transporte/transporte_sgc');
});

Route::get('transporte/', function()
{
    //return View::make('hello');
    return Redirect::to('transporte/transporte_sgc');
});

//BSC
Route::get('fadebsc', function()
{
    //return View::make('hello');
    return Redirect::to('fadebsc/fade_bsc');
});
Route::get('fadebsc/', function()
{
    //return View::make('hello');
    return Redirect::to('fadebsc/fade_bsc');
});
Route::get('empresasbsc', function()
{
    //return View::make('hello');
    return Redirect::to('empresasbsc/empresas_bsc');
});
Route::get('empresasbsc/', function()
{
    //return View::make('hello');
    return Redirect::to('empresasbsc/empresas_bsc');
});
Route::get('finanzasbsc', function()
{
    //return View::make('hello');
    return Redirect::to('finanzasbsc/finanzas_bsc');
});
Route::get('finanzasbsc/', function()
{
    //return View::make('hello');
    return Redirect::to('finanzasbsc/finanzas_bsc');
});
Route::get('marketingbsc', function()
{
    //return View::make('hello');
    return Redirect::to('marketingbsc/marketing_bsc');
});
Route::get('marketingbsc/', function()
{
    //return View::make('hello');
    return Redirect::to('marketingbsc/marketing_bsc');
});
Route::get('transportebsc', function()
{
    //return View::make('hello');
    return Redirect::to('transportebsc/transporte_bsc');
});
Route::get('transportebsc/', function()
{
    //return View::make('hello');
    return Redirect::to('transportebsc/transporte_bsc');
});

