@extends('layouts.panel')
@section('title', 'Mantenimientos/Edit')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-edit"></i> Editar Mantenimiento</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('maintenances.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body container-fluid">
                <form action="{{ route('maintenances.update', $maintenance) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('maintenances.form')
                </form>
            </div>
        </div>
    </div>
@endsection
