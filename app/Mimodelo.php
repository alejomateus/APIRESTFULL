<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mimodelo extends Model  {

	public function saludar($nombre)
	{
		return "Hola $nombre";
	}

}
