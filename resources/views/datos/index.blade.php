

{{--
extends hereda una vista, si buscas en resources/template vas a encontrar la directiva yield con la seccion content, 
Osea se, esta pantalla va a tener todo el contenido del template junto con este bloque a donde se encuentre la directiva @yield


--}}
@extends('layouts.admin')

@section('title','clientes')

@push('css')

<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
@endpush

{{--Aqui inicia--}}
@section('contenido')


<!-- Page Wrapper -->

<div class="container-fluid px-4">

  <h1 class="mt-4">{{$title}}</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"> <a href="{{route('panel')}}"></a></li>
    <li class="breadcrumb-item active">Categorias</li>
  </ol>
</div>
<div class="mb-4">
  <a href="{{route('clientes.create')}}"><button type="button" class="btn btn-outline-primary">Añadir a nuevo registro</button></a>
</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          

            <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
         
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
             <th>Descripcion</th>
            
     
          </tr>
        </tfoot>
        <tbody>
          @foreach($metadatos as $metadato)
          <tr>
            <td>{{$metadato->nombre}}</td>
            <td>{{$metadato->descripcion}}</td>
       
          
            <td>


            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>



<!-- End of Main Content -->

<!-- Footer -->

<!-- End of Footer -->


<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


<!-- End of Main Content -->

<!-- Footer -->

<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>


<!--DeleteModal-->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')

@endpush


