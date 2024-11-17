{{--
extends hereda una vista, si buscas en resources/template vas a encontrar la directiva yield con la seccion content, 
Osea se, esta pantalla va a tener todo el contenido del template junto con este bloque a donde se encuentre la directiva @yield


--}}
@extends('template')

@section('title','clientes')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">


@endpush

{{--Aqui inicia--}}
@section('content')

<div class="container-fluid px-4">

 <h1 class="mt-4">Clientes</h1>
 <ol class="breadcrumb mb-4">
   <li class="breadcrumb-item"> <a href="{{route('panel')}}">Inicio</a></li>
   <li class="breadcrumb-item active">Categorias</li>
</ol>
<div class="mb-4">
<a href="{{route('cliente.create')}}"><button type="button" class="btn btn-outline-primary">Añadir a nuevo registro</button></a>
</div>
<div class="card mb-4">
    {{--Inicio de la tabla, copia y pega esto si lo vas a reusar--}}
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabla Clientes
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Numero</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Direccion</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       @foreach ($clientes as $cliente )
                                        
                                     
                                        <tr>
                                            <td>{{$cliente -> nombre}}</td>
                                            <td>{{$cliente -> apellido}}</td>
                                            <td>{{$cliente -> id}}      </td>
                                            <td>{{$cliente -> telefono}}</td>
                                            <td>{{$cliente -> correo}}        </td>
                                            <td>{{$cliente -> direccion}}      </td>
                                            <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                 <button type="button" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button>
                                                     <button type="button" class="btn btn-secondary"><i class="fa-regular fa-circle-xmark"></i></button>
                                                </div></td>
                                           
                                        </tr>
                                           
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>
@endpush