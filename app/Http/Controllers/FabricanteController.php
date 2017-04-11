<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\fabricante;

class FabricanteController extends Controller {

	public function __construct()
	{
		//return fabricante::all();
		$this->middleware('auth.basic',['only'=>['store']]);
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return fabricante::all();
		return response()->json(['datos'=>fabricante::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return "Mostrando el menu para crear un fabricante";
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
		$fabricante = fabricante::find($id);
		if(!$fabricante){
			return response()->json(['mensaje'=>"No hay registros del fabricante con ID $id",'codigo'=>404],404);
		}
		else{
			return response()->json(['datos'=>$fabricante]);
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
		return "Mostrando el formulario para editar el fabricante con ID $id";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Mostrando el formulario para actualizar el fabricante con ID $id";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Mostrando el formulario para eliminar el fabricante con ID $id";
	}

}
