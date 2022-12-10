@extends('layouts.app')

@section('template_title')
    Números de parte
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ ('Números de parte') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('number-parts.create') }}" class="btn btn-primary btn-sm float-right">
                                  {{ ('Nuevo Sku') }}
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
                            <table class="table table-striped table-boredered">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
										<th>Sku</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($numberParts as $numberPart)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $numberPart->sku }}</td>

                                            <td>
                                                <form action="{{ route('number-parts.destroy',$numberPart->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('number-parts.show',$numberPart->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('number-parts.edit',$numberPart->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $numberParts->links() !!}
            </div>
        </div>
    </div>
@endsection
