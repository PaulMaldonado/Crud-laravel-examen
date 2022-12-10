@extends('layouts.app')

@section('template_title')
    {{ $numberPart->name ?? 'Ver número de parte' }}
@endsection

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-lg-5 col-xl-5 col-xxl-5 mx-auto">
                <div class="card shadow-lg">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="card-title">Número de parte</span>
                        <a class="btn btn-primary" href="{{ route('number-parts.index') }}">Atrás</a>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <h5 class="card-title">Sku: {{ $numberPart->sku }}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
