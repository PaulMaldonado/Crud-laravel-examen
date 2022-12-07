@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Producto' }}
@endsection

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card shadow-lg">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="card-title">Producto</span>
                        <a class="btn btn-primary" href="{{ route('productos.index') }}">Atrás</a>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <h5 class="card-title">Marca: {{ $producto->marca->name }}</h5>
                        </div>
                        <div class="form-group">
                            <h5 class="card-title">Nombre del producto:  {{ $producto->name }}</h5>
                        </div>
                        <div class="form-group">
                            <p class="card-text text-dark fw-bold text-muted">Upc: {{ $producto->upc }}</p>
                        </div>
                        <div class="form-group">
                            <p class="card-text text-muted text-dark fw-bold">Costo actual: {{ number_format($producto->current_cost, 2) }}</p>
                        </div>
                        <div class="form-group">
                            <p class="card-text text-dark fw-bold text-dark">Porcentaje de beneficio: {{ $producto->profit_percentage."%" }}</p>
                        </div>
                        <div class="form-group">
                            <strong>Habilitado: <span class="badge bg-success"> {{ $producto->enable }}</span></strong>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
