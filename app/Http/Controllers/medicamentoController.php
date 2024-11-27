<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreMetadatoRequest;
use Illuminate\Http\Request;
use App\Models\Medicamento;
use App\Models\Documento;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Requests\UpdateClienteRequest;

class medicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $title = "Medicamentos";
        $medicamento = Medicamento::all();

        return view("medicamentos.index", ['medicamentos' => $medicamento],['title'=>$title]);
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
