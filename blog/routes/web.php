<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//==================== SIN CONTROLADOR usando la función anonima por default ====================
//Route::get('/', ['as' => 'home', function () {
    //return view('welcome');
	//return "Hola desde la pagina de inicio";
	
	/*echo "<a href=" . route('contactos') . ">Contacto</a><br>";
	echo "<a href=" . route('contactos') . ">Contacto</a><br>";
	echo "<a href=" . route('contactos') . ">Contacto</a><br>";*/
	
	//return view('home');
//}]);

/*Route::get('contacto', function(){
	return "Hola desde la pagina de contactos";
});*/

//Sin Controlador usando la función anonima por default
/*Route::get('contactame', ['as' => 'contactos', function(){
	//return "Seccion de contactos";
	return view('contactos');
}]);*/

//Sin Controlador usando la función anonima por default
/*Route::get('saludos/{nombre?}', ['as' => 'saludos', function($nombre = "Invitado"){
	//return "Saludos $nombre";
	//return view('saludo', ['nombre' => $nombre]);
	//return view('saludo') -> with(['nombre' => $nombre]);
	
	$html = "<h2>Contenido html </h2>"; //ingresado por formulario
	
	$script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>"; //ingresado por formulario
	*/
	//$consolas = [/*"Play station 4", "Xbox One", "Wii U"*/];
	
	/*return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
}])-> where ('nombre', "[A-Za-z]+");*/

//============================== POR CONTROLADOR =====================================

//Por Controlador
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

//Por Controlador
Route::post('contacto', 'PagesController@mensajes');

//Por Controlador
Route::get('contactame', ['as' => 'contactos', 'uses' => 'PagesController@contact']);

//Por Controlador
Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])-> where ('nombre', "[A-Za-z]+");