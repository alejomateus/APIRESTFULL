<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fabricante;
class Vehiculo extends Model  {
	protected $table= "vehiculos";
	protected $primaryKey="serie";
	protected $fillable = array('color','cilindraje','potencia');
	protected $hidden = ['created_at', 'updated_at'];
	
	public function fabricante (){
		 return $this->belongsTo('Fabricante');
	}
}
