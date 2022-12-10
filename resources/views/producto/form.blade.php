<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group mt-3">
            {{ Form::label('Seleccionar marca') }}
            {{ Form::select('marca_id', $marcas, $producto->marca_id, ['class' => 'form-control' . ($errors->has('marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar marca']) }}
            {!! $errors->first('marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('Seleccionar sku') }}
            {{ Form::select('number_part_id', $numberPart, $producto->number_part_id, ['class' => 'form-control' . ($errors->has('number_part_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar sku']) }}
            {!! $errors->first('number_part_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('Nombre del producto') }}
            {{ Form::text('name', $producto->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del producto']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('upc') }}
            {{ Form::text('upc', $producto->upc, ['class' => 'form-control' . ($errors->has('upc') ? ' is-invalid' : ''), 'placeholder' => 'Upc']) }}
            {!! $errors->first('upc', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('Costo actual') }}
            {{ Form::text('current_cost', $producto->current_cost, ['class' => 'form-control' . ($errors->has('current_cost') ? ' is-invalid' : ''), 'placeholder' => 'Costo actual']) }}
            {!! $errors->first('current_cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('profit_percentage') }}
            {{ Form::text('profit_percentage', $producto->profit_percentage, ['class' => 'form-control' . ($errors->has('profit_percentage') ? ' is-invalid' : ''), 'placeholder' => 'Profit Percentage']) }}
            {!! $errors->first('profit_percentage', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('precio') }}
            {{ Form::text('price', $producto->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-3">
            {{ Form::label('Habilitado') }}
            {{ Form::text('enable', $producto->enable, ['class' => 'form-control' . ($errors->has('enable') ? ' is-invalid' : ''), 'placeholder' => 'Habilitado']) }}
            {!! $errors->first('enable', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>

    <div class="d-grid gap-2">
        <input type="submit" value="Guardar" class="btn btn-primary mt-3">
    </div>
</div>