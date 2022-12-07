<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $marca->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-4">
            {{ Form::label('Activada') }}
            {{ Form::text('enabled', $marca->enabled, ['class' => 'form-control' . ($errors->has('enabled') ? ' is-invalid' : ''), 'placeholder' => 'Activa']) }}
            {!! $errors->first('enabled', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>

    <div class="d-grid gap-2">
        <input type="submit" value="Guardar" class="btn btn-primary mt-4">
    </div>
</div>