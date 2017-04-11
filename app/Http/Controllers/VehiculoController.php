<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller {

	public function __construct()
	{
		//return fabricante::all();
		$this->middleware('auth.basic');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vehiculo = Vehiculo::all();
		if(!$vehiculo){
			return response()->json(['mensaje'=>"No existen vehiculos",'codigo'=>404],404);
		}
		else{
			return response()->json(['datos'=>$vehiculo]);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vehiculo = Vehiculo::find($id);
		if(!$vehiculo){
			return response()->json(['mensaje'=>"No hay vehiculo con numero de serie $id",'codigo'=>404],404);
		}
		else{
			return response()->json(['datos'=>$vehiculo]);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
