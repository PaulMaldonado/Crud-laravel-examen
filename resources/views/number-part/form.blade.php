<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sku') }}
            {{ Form::text('sku', $numberPart->sku, ['class' => 'form-control' . ($errors->has('sku') ? ' is-invalid' : ''), 'placeholder' => 'Sku']) }}
            {!! $errors->first('sku', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>

    <div class="d-grid gap-2">
        <input type="submit" value="Guardar" class="btn btn-primary mt-4">
    </div>
</div>