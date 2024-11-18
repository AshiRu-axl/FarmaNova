<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Documento;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Requests\UpdateClienteRequest;
class clienteController extends Controller
{
    
    //Para regresar las vistas en un anchor usa el siguiente formato -> href=''{{route'nombre'}}
    //Todos los anchors en el menu de al lado estan en 

    public function index()
    {   
        //El primero es una carpeta y el segundo el nombre de la pantalla, es como navegar entre directorios pero sin usando . en vez de /
        //Todos los anchors del menu de al lado estan en resources/views/clientes/navigation-menu
        $clientes = Cliente::all();
      
        return view("cliente.index",['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cliente.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {

        
        
try {       
        $cliente = Cliente::create($request->validated());
          DB::beginTransaction();
          DB::commit();
    }catch(Exception $e){
        DB::rollBack();
    }

    return redirect()->route('clientes.index')->with('success', 'Cliente registrado');
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
    public function edit(Cliente $cliente)
    {
        return view("cliente.edit",["cliente"=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        // Debug validated input
        
        
        $cliente->update($request->validated());
    
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
