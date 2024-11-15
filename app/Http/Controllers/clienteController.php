<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteController extends Controller
{
    
    //Para regresar las vistas en un anchor usa el siguiente formato -> href=''{{route'nombre'}}
    //Todos los anchors en el menu de al lado estan en 

    public function index()
    {   
        //El primero es una carpeta y el segundo el nombre de la pantalla, es como navegar entre directorios pero sin usando . en vez de /
        //Todos los anchors del menu de al lado estan en resources/views/clientes/navigation-menu
        return view("clientes.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("");
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
