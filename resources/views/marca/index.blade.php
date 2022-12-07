@extends('layouts.app')

@section('template_title')
    Marcas
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ ('Marcas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('marcas.create') }}" class="btn btn-primary btn-sm float-right">
                                  {{ ('Nueva marca') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
										<th>Nombre</th>
										<th>Activada</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marcas as $marca)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $marca->name }}</td>
											<td>{{ $marca->enabled }}</td>

                                            <td>
                                                <form action="{{ route('marcas.destroy',$marca->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('marcas.show',$marca->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('marcas.edit',$marca->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Elminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $marcas->links() !!}
            </div>
        </div>
    </div>
@endsection
