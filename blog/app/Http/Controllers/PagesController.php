<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	protected $request;
	
	/*public function __construct(Request $request)
	{
		$this->request = $request;
	}*/
	
    //home
	public function home()
	{
		return view('home');
	}
	
	//contact
	public function contact()
	{
		return view('contactos');
	}
	
	//mensaje
	public function mensajes(Request $request)
	{
		//return "Procesando el mensaje...";
		//return $request->all();
		
		if($request->has('nombre'))
		{
			//return $request->all();
			return "Si tiene nombre. Es " . $request->input('nombre');
		}
		
		return "No tiene nombre";
	}
	
	//saludo
	public function saludo($nombre = "Invitado")
	{
		$html = "<h2>Contenido html </h2>"; //ingresado por formulario
	
		$script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>"; //ingresado por formulario
		
		$consolas = ["Play station 4", "Xbox One", "Wii U"];
		
		return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
	}
}