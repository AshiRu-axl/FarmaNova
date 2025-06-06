<?php

namespace App\Http\Controllers;
use App\Models\Compra;
use App\Models\Proveedore;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class compraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $proveedores = Proveedore::all();
    
        $medicamentos = Medicamento::with(['detalles', 'metadatos'])->get();

        // Retornar a una vista, pasando los medicamentos con sus relaciones
        return view('compras.index', compact('medicamentos'),['proveedores'=> $proveedores]);
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
