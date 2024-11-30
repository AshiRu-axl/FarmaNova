<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFamiliaRequest;
use App\Http\Requests\StoreMetadatoRequest;
use Illuminate\Http\Request;
use App\Models\Metadato;
use App\Models\Documento;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Requests\UpdateClienteRequest;

class familiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        $title="Familias";
        $metadatos = Metadato::where('tipo', 'familia')->get();
        return view("datos.index",['metadatos'=>$metadatos],['title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("datos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMetadatoRequest $request)
    {
   
    
    
            try {
                $metadato = Metadato::create($request->validated());
                $metadato['tipo']='familia';
                DB::beginTransaction();
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
            }
    
            return redirect()->route('datos.index')->with('success', 'Cliente registrado');
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
        
    }
}
