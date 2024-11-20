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
<a href="{{route('clientes.create')}}"><button type="button" class="btn btn-outline-primary">Añadir a nuevo registro</button></a>
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
                                            <td>{{$cliente -> documento_id}}      </td>
                                            <td>{{$cliente -> telefono}}</td>
                                            <td>{{$cliente -> correo}}        </td>
                                            <td>{{$cliente -> direccion}}      </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <form action="{{route('clientes.edit',['cliente'=>$cliente])}}" method="get">
                                                 <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button>
                                                 </form>
                                                 
                                                     <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#confirmModal-{{$cliente->id}}"><i class="fa-regular fa-circle-xmark"></i></button>
                                                     </form>
                                                </div>
                                            </td>
                                           
                                        </tr>
                                        @endforeach
                                           
                                      <!-- Button trigger modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="confirmModal-{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <form action="{{route('clientes.destroy',['cliente'=>$cliente->id])}}" method="post">
         @method('DELETE');
          @csrf
          <button type="submit" class="btn btn-primary">Save changes</button>
         </form>
        
      </div>
    </div>
  </div>
</div>                           
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>


@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.modal').modal('show');
});
</script>
@endpush