<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_Caja') }}
            {{ Form::text('id_Caja', $movimiento->id_Caja, ['class' => 'form-control' . ($errors->has('id_Caja') ? ' is-invalid' : ''), 'placeholder' => 'Id Caja']) }}
            {!! $errors->first('id_Caja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Codigos') }}
            {{ Form::text('id_Codigos', $movimiento->id_Codigos, ['class' => 'form-control' . ($errors->has('id_Codigos') ? ' is-invalid' : ''), 'placeholder' => 'Id Codigos']) }}
            {!! $errors->first('id_Codigos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Usuario') }}
            {{ Form::text('id_Usuario', $movimiento->id_Usuario, ['class' => 'form-control' . ($errors->has('id_Usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_Usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $movimiento->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor') }}
            {{ Form::text('Valor', $movimiento->Valor, ['class' => 'form-control' . ($errors->has('Valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('Valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>