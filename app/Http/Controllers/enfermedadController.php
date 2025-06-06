<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetalleRequest;
use Illuminate\Http\Request;
use App\Models\Detalle;
use App\Models\Documento;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Requests\UpdateClienteRequest;

class enfermedadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title='Enfermedades';
        $detalles = Detalle::where('tipo', 'enfermedad')->get();
        return view("detalles.index",['detalles'=>$detalles],['title'=>$title]);
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
