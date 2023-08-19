@extends('layouts.app')

@section('template_title')
    {{ $movimiento->name ?? "{{ __('Show') Movimiento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Movimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Caja:</strong>
                            {{ $movimiento->id_Caja }}
                        </div>
                        <div class="form-group">
                            <strong>Id Codigos:</strong>
                            {{ $movimiento->id_Codigos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $movimiento->id_Usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $movimiento->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $movimiento->Valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
