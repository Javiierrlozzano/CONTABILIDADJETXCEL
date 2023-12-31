<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
            <div class="form-group">
            {{ Form::label('id_empresa') }}
            {{ Form::select('id_empresa', $empresa,$caja->id_empresa, ['class' => 'form-control' . ($errors->has('id_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Id Empresa']) }}
            {!! $errors->first('id_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            </div>

            <div class="col-sm-4">
            <div class="form-group">
            {{ Form::label('Nombre de Caja') }}
            {{ Form::text('Descripcion', $caja->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            </div>

            <div class="col-sm-4">
            <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('Estado',['Activo'=>'Activo','Inactivo'=>'Inactivo'], $caja->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            </div>
        

        </div>
    
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>