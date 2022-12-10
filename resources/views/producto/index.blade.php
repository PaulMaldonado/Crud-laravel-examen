@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ ('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right">
                                  {{ ('Nuevo producto') }}
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
                                        
										<th>Marca</th>
										<th>Nombre del producto</th>
										<th>Upc</th>
										<th>Costo actual</th>
										<th>Porcentaje de beneficio</th>
                                        <th>Precio</th>
                                        <th>Ganacia</th>
										<th>Habilitado</th>
                                        <th>SKU</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->marca->name }}</td>
											<td>{{ $producto->name }}</td>
											<td>{{ $producto->upc }}</td>
											<td>{{ number_format($producto->current_cost, 2) }}</td>
											<td>{{ "0".$producto->profit_percentage."%" }}</td>
                                            <td>{{ number_format($producto->price, 2) }}</td>
                                            <td>{{ number_format($producto->formulaCostoActualPorcentaje(), 2) }}</td>
											<td>{{ $producto->enable }}</td>
                                            <td>
                                                @if(count($producto->numberParts) > 0) 
                                                    <span class="badge bg-success">{{ $producto->numberPart->sku }}</span>
                                                @else
                                                    <span class="badge bg-dark">No hay aún sku asignado</span>
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
