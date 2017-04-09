<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model  {
	protected $table= "vehiculo";
	protected $primarykey="serie";
	protected $fillable = array('color','cilindraje','potencia');

	public function fabricante (){
		$this->belongsTo('Fabricante');
	}
}
