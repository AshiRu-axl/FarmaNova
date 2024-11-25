<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreMetadatoRequest;
use Illuminate\Http\Request;
use App\Models\Metadato;
use App\Models\Documento;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Requests\UpdateClienteRequest;


class presentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metadatos = Metadato::where('tipo', 'presentacion')->get();
        return view("presentacione.index",['metadatos'=>$metadatos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
