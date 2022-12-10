@extends('layouts.app')

@section('template_title')
    Editar número de parte
@endsection

@section('content')
    <section class="container">
        <div class="">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">

                @includeif('partials.errors')

                <div class="card shadow-lg">
                    <div class="card-header">
                        <span class="card-title">Editar número de parte</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('number-parts.update', $numberPart->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('number-part.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
