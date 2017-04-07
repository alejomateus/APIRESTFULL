<?php namespace App\Http\Controllers;

use App\Mimodelo;

class Micontrolador extends Controller {


	function index(){
		$modelo = new Mimodelo();
		$resultado = $modelo-> saludar("Jorge");
		return view ("Prueba.index",["saludo"=>$resultado]);
	}

}