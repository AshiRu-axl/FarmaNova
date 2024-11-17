@extends('layouts.app')

@section('title','Crear cliente')

@push('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
  
</style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear Cliente</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clientes.index')}}">Clientes</a></li>
        <li class="breadcrumb-item active">Crear cliente</li>
    </ol>
    <div class="card">
        <form action="{{ route('clientes.store') }}" method="post">
            @csrf
            <div class="card-body text-bg-light">
            <div class="row g-3">
                <!-Nombre->
            <div class="col-md-6">
                <label for="tipo_persona" class="form-label">Nombre:</label>
                <input class="form-input" name="nombre" id="nombre" value="{{old('nombre')}}">
                @error('nombre')
                <small class="text-danger">{{'*'.$message}}</small>
                @enderror
            </div>

            <div class="col-12">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input class="form-input" name="apellido" id="apellido" value="{{old('apellido')}}"></input>
                        @error('apellido')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="documento_id" class="form-label">Cédula:</label>
                        <input class="form-input" name="documento_id" id="documento_id" value="{{ old('documento_id') }}">
                        @error('documento_id')
                        <small class="text-danger">{{ '*' . $message }}</small>
                        @enderror

                    </div>
                    <div class="col-12">
                        <label for="telefono" class="form-label">telefono</label>
                        <input class="form-input" name="telefono" id="telefono" value="{{old('telefono')}}"></input>
                        @error('telefono')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="correo" class="form-label">correo</label>
                        <input class="form-input" name="correo" id="correo" value="{{old('correo')}}"></input>
                        @error('correo')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

            <div class="col-12">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input required type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion')}}">
                        @error('direccion')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>
                    <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
                   
@endsection






@push('js')
<script>
    
   
</script>
@endpush