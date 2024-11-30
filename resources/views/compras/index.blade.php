@extends('layouts.admin')

@section('title','categorias')

@push('css')

@endpush

@section('contenido')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Formulario de Compras</h1>

    <div class="row">
    <!-- Columna izquierda - Formulario de Producto -->
    <div class="col-lg-7 "> <!-- 6 columns for the first card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Agregar Producto</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <div class="d-flex align-items">
                            <label for="supplier" class="mr-2 mt-2">Buscar producto</label>
                            <select id="supplier" class="form-control mr-2" style="width: 300px;">
                                @foreach($medicamentos as $medicamento)
                                    <option value="">{{ $medicamento->nombre }}
                                        @foreach($medicamento->metadatos as $dato)
                                            @if($dato->tipo == "presentacion")
                                                {{ $dato->nombre }}
                                            @endif
                                        @endforeach
                                    </option>
                                @endforeach
                            </select>
                            <button type="button" class="btn btn-circle"><i class="fa-regular fa-circle-question"></i></button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="quantity">Cantidad</label>
                            <input type="number" class="form-control" id="quantity" placeholder="Cantidad" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="unit">Presentación/Unidad</label>
                            <select id="unit" class="form-control">
                                <option value="blister">Blister</option>
                                <option value="lotes">Lotes</option>
                                <option value="docenas">Docenas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Precio de venta</label>
                        <input type="number" class="form-control" id="price" placeholder="Precio de venta" min="0">
                    </div>
                    <div class="form-group">
                        <label for="discount">Descuento</label>
                        <input type="number" class="form-control" id="discount" placeholder="Descuento" min="0">
                    </div>
                    <button type="submit" class="btn btn-success">Agregar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Columna derecha - Detalle de Productos -->
    <div class="col-lg-5"> <!-- 6 columns for the second card -->
        <div class="card shadow mb-5" style="font-size: 0.8rem;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detalle de Productos</h6>
            </div>
            <div class="card-body ">
                <table class="table table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Venta</th>
                            <th>Descuento</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Producto Ejemplo</td>
                            <td>2</td>
                            <td>50.00</td>
                            <td>10%</td>
                            <td>90.00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong>Sumas:</strong> 90.00</p>
                        <p><strong>IGV%:</strong> 18%</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p><strong>Total:</strong> 106.20</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <!-- Tabla de productos agregados -->




<!--a partir de aqui puede que los scrpt no peguen del todo xd lo resuelve el reventon de mañana-->

<!-- Script para validar que la cantidad no sea negativa -->

<!-- /.container-fluid -->


<!-- Scrollable modal -->
<div class="modal-dialog modal-dialog-scrollable">
    ...
</div>


@endsection

@push('js')

@endpush