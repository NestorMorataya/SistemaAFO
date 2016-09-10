<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ConsultaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

         /*
		 $bien = DB::table('bien')->orderBy('bien_pk','ASC')->Paginate(100)->setPath('');
		return view('consulta.consulta',compact('bien'));

->join('marca', 'bien.marca_fk', '=', 'marca.marca_pk')
		->join('ubicacion', 'inventario.ubicacion_fk', '=', 'ubicacion_pk')


        
        */
		

		$bien=DB::table('bien')
		->leftJoin('inventario as inventario', 'bien.bien_pk', '=', 'inventario.bien_fk', 'left outer')
		->leftJoin('marca', 'bien.marca_fk', '=', 'marca.marca_pk', 'left outer')
		->leftJoin('ubicacion', 'inventario.ubicacion_fk', '=', 'ubicacion_pk', 'left outer')
		->leftJoin('unidad', 'inventario.unidad_fk', '=', 'unidad.unidad_pk', 'left outer')
		->leftJoin('identificacion', 'bien.identificacion_fk', '=', 'identificacion.identificacion_pk', 'left outer')
		->select('bien.bien_pk', 'bien.identificacion_fk', 'nombre_marca','descripcion_equipo','modelo','serie','ubicacion','estado_fk','nombre_unidad','valor_adquisicion','bien_principal_fk')
		->orderBy('bien_pk','ASC')->Paginate(50)->setPath('');
		return view('consulta.consulta',compact('bien'));
		

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
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
		//
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
