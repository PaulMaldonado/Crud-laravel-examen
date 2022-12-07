@extends('layouts.app')

@section('template_title')
    Nueva marca
@endsection

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">

                @includeif('partials.errors')

                <div class="card shadow-lg">
                    <div class="card-header">
                        <span class="card-title">Crear marca</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('marcas.store') }}" enctype="multipart/form-data">
                            @csrf

                            @include('marca.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
