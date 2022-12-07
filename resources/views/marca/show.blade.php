@extends('layouts.app')

@section('template_title')
    {{ $marca->name ?? 'Marca' }}
@endsection

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-lg-5 col-xl-5 col-xxl-5 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="card-title">Marca</span>
                        <a class="btn btn-primary" href="{{ route('marcas.index') }}">Atrás</a>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <h5 class="card-title">Nombre: {{ $marca->name }}</h5>
                        </div>

                        <div class="form-group mt-2">
                            <p class="card-text text-muted">Activa: <span class="badge bg-success">{{ $marca->enabled }}</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
