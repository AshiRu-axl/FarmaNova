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
<li class="breadcrumb-item active">Editar Categoria</li>
</ol>
</div>
@endsection

@push('js')

@endpush