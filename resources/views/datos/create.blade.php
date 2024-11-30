@extends('layouts.admin')

@section('title','categorias')

@push('css')

@endpush
@section('contenido')
<div class="container mt-5">
        <div class="border p-4 rounded shadow-sm bg-white">
            <h2 class="mb-4">Agregar Detalle</h2>
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="5" required></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Guardar Cambios</button>
                    <button type="button" class="btn btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>
    </div>




@endsection

@push('js')

@endpush