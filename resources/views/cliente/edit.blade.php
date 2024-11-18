@extends('layouts.app')

@section('title','Editar cliente')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Cliente</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clientes.index')}}">Clientes</a></li>
        <li class="breadcrumb-item active">Editar cliente</li>
    </ol>

    <div class="card text-bg-light">
        <form action="{{ route('clientes.update',['cliente'=>$cliente]) }}" method="post">
        @csrf   
        @method('PATCH')
           
            <div class="card-header">
                <p>Cliente <span class="fw-bold">{{ strtoupper($cliente->nombre)}}</span></p>
            </div>
            <div class="card-body">

                <div class="row g-3">

                    <!-------Razón social------->
                    <div class="col-6">
                       
                        <label id="label-juridica" for="nombre" class="form-label">Nombre</label>
                       

                        <input required type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre',$cliente->nombre)}}">

                        @error('nombre')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                    <!------Dirección---->
                    <div class="col-6">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input required type="text" name="apellido" id="apellido" class="form-control" value="{{old('apellido',$cliente->apellido)}}">
                        @error('apellido')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                    <!--------------Documento------->
                
                    <div class="col-6">
                        <label for="documento_id" class="form-label">Cedula</label>
                        <input required type="text" name="documento_id" id="documento_id" class="form-control" value="{{old('documento_id',$cliente->documento_id)}}">
                        @error('documento_id')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input required type="text" name="telefono" id="telefono" class="form-control" value="{{old('telefono',$cliente->telefono)}}">
                        @error('telefono')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input required type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion',$cliente->direccion)}}">
                        @error('direccion')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>

                     <div class="col-6">
                        <label for="correo" class="form-label">correo</label>
                        <input required type="text" name="correo" id="correo" class="form-control" value="{{old('correo',$cliente->correo)}}">
                        @error('correo')
                        <small class="text-danger">{{'*'.$message}}</small>
                        @enderror
                    </div>


                </div>

            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-secondary">Reiniciar</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')

@endpush