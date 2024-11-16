@extends('template')

@section('title','categorias')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">

                        <h1 class="mt-4">Añadir cliente</h1>
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"> <a href="{{route('panel')}}">Inicio</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('cliente.index')}}">Categorias</a></li>
                        <li class="breadcrumb-item active">Agregar cliente</li>
                        </ol>
</div>
<div class="conatiner w-100">
    <form action="" method="post">
        <div class="row g-3">
            <div class="col-md-6">
                <lable for="nombre">Nombre</lable>
                <input type="text" name="nombre" id="nombre">
            </div>
        </div>

    </form>
</div>
@endsection

@push('js')

@endpush