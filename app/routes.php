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
	return Redirect::to('home');
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

        $tipo=DB::select('SELECT et.COD_TIPO FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE e.CI ='.Input::get('username').';');
            # code...
        Session::put('tipo', $tipo);
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

//Route::get('home', array('uses' => 'HomeController@showWelcome'));
Route::get('home', 'HomeController@showWelcome');

//Route::get('empleados', array('uses' => 'EmpleadosController@mostrarEmp'));

Route::get('empleados', array('uses' => 'EmpleadosController@mostrarEmpleados'));
 
Route::post('empleados/crear', array('uses' => 'EmpleadosController@crearEmpleado'));


//rutas para la evaluacion de empleados
Route::get('evaluacion/{a}/{b}/{c}/{d}/{e}/{f}', array('uses' => 'EmpleadosController@mostrarEmp'));
Route::post('/categories2', array('uses' => 'EmpleadosController@mostrarEmp3'));
Route::post('/categories', array('uses' => 'EmpleadosController@insertar'));
//


Route::get('/pruebav01', array('uses' => 'EmpleadosController@mostrarEmp'));
Route::get('/datos', array('uses' => 'HomeController@envios_ajax'));

//Controllers Escuela programmer.

//Escuela de Contabilidad y Auditoria
Route::get('home/welcome', 'ContabilidadController@home'); //Ojo creo que esta mal 
Route::get('contabilidad/cont_audi_sgc', 'ContabilidadController@contabilidadsgc');
Route::get('contabilidad/macroprocesos', 'ContabilidadController@macroprocesos');
Route::get('contabilidad/M_Administrativa', 'ContabilidadController@administrativa');

//Escuela de Educación a Distancia
Route::get('home/welcome', 'DistanciaController@home');  
Route::get('E_distancia/distancia_sgc', 'DistanciaController@distanciasgc');
Route::get('E_distancia/macroprocesos', 'DistanciaController@macroprocesos');

//Escuela de Administración de Empresas
Route::get('home/welcome', 'EmpresasController@home');  
Route::get('empresas/empresas_sgc', 'EmpresasController@empresasgc');
Route::get('empresas/macroprocesos', 'EmpresasController@macroprocesos');

//Escuela de Comercio Exterior
Route::get('home/welcome', 'ExteriorController@home');
Route::get('C_exterior/exterior_sgc', 'ExteriorController@exteriorsgc');
Route::get('C_exterior/macroprocesos', 'ExteriorController@macroprocesos');

//Escuela de Finanzas
Route::get('home/welcome', 'FinanzasController@home');
Route::get('finanzas/finanzas_sgc', 'FinanzasController@finanzassgc');
Route::get('finanzas/macroprocesos', 'FinanzasController@macroprocesos');

//Escuela de Marketing
Route::get('home/welcome', 'MarketingController@home');
Route::get('marketing/marketing_sgc', 'MarketingController@marketingsgc');
Route::get('marketing/macroprocesos', 'MarketingController@macroprocesos');

//Escuela de Gestión de Transporte
Route::get('home/welcome', 'TransporteController@home');
Route::get('transporte/transporte_sgc', 'TransporteController@transportesgc');
Route::get('transporte/macroprocesos', 'TransporteController@macroprocesos');

