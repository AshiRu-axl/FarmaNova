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
                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Agregar Producto</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="searchProduct">Buscar producto</label>
                                            <input type="text" class="form-control" id="searchProduct" placeholder="Buscar producto" onkeyup="updateProductInfo()">
                                        </div>
                                        
                                        <!-- Clasificación del producto -->
                                        <div class="col-md-6">
                                            <label for="productClassInfo">Información relevante del producto</label>
                                            <select id="productClassInfo" class="form-control">
                                                <option value="default" selected></option>
                                            </select>
                                        </div>

                                        <p></p>
                
                                        <!-- Cantidad y Unidad de medida (uno al lado del otro) -->
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="quantity">Cantidad</label>
                                                <input type="number" class="form-control" id="quantity" placeholder="Cantidad" min="0" oninput="validateQuantity()">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="unit">presentacion/unidad</label>
                                                <select id="unit" class="form-control">
                                                    <option value="blister">Blister</option>
                                                    <option value="lotes">Lotes</option>
                                                    <option value="docenas">Docenas</option>
                                                </select>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="price">Precio de venta</label>
                                            <input type="number" class="form-control" id="price" placeholder="Precio de venta" min="0" oninput="validatePriceDiscount()">
                                        </div>
                                        <div class="form-group">
                                            <label for="discount">Descuento</label>
                                            <input type="number" class="form-control" id="discount" placeholder="Descuento" min="0" oninput="validatePriceDiscount()">
                                        </div>
                                        <button type="submit" class="btn btn-success">Agregar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                
                        <!-- Columna derecha - Formulario de Proveedor e Información del Cliente -->
                        <div class="col-lg-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Proveedor e Información del Cliente</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <!-- Selección de Proveedor -->
                                        <div class="form-group">
                                            <label for="supplier">Proveedor</label>
                                            <select id="supplier" class="form-control">
                                                <option value="">Seleccione un Proveedor</option>
                                                <option value="supplier1">Proveedor 1</option>
                                                <option value="supplier2">Proveedor 2</option>
                                                <!-- Más proveedores aquí -->
                                            </select>
                                        </div>
                
                                        <!-- Información del Cliente (siempre visible) -->
                                        <div id="clientInfo">
                                            <div class="form-group">
                                                <label for="receipt">Comprobante</label>
                                                <input type="text" class="form-control" id="receipt" placeholder="Tipo de Comprobante">
                                            </div>
                                            <div class="form-group">
                                                <label for="receiptNumber">Número de comprobante</label>
                                                <input type="text" class="form-control" id="receiptNumber" placeholder="Número de Comprobante">
                                            </div>
                                            <div class="form-group">
                                                <label for="tax">Impuesto (IGV)</label>
                                                <input type="number" class="form-control" id="tax" placeholder="IGV">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Fecha</label>
                                                <input type="date" class="form-control" id="date">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Tabla de productos agregados -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Detalle de Productos</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
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
                                            <!-- Aquí se agregarían dinámicamente los productos añadidos -->
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

                <!--a partir de aqui puede que los scrpt no peguen del todo xd lo resuelve el reventon de mañana-->
                
                <!-- Script para validar que la cantidad no sea negativa -->
     
                <!-- /.container-fluid -->

            </div>
@endsection

@push('js')

@endpush