@extends('layouts.app')

@section('template_title')
    Movimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movimiento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('movimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Caja</th>
										<th>Id Codigos</th>
										<th>Id Usuario</th>
										<th>Tipo</th>
										<th>Valor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movimientos as $movimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $movimiento->id_Caja }}</td>
											<td>{{ $movimiento->id_Codigos }}</td>
											<td>{{ $movimiento->id_Usuario }}</td>
											<td>{{ $movimiento->Tipo }}</td>
											<td>{{ $movimiento->Valor }}</td>

                                            <td>
                                                <form action="{{ route('movimientos.destroy',$movimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('movimientos.show',$movimiento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('movimientos.edit',$movimiento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $movimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
