@extends('layouts.panel')
@section('title', 'Vehículos/Show')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-car"></i> Detalles del Vehículo</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('vehicles.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Matrícula:</strong> {{ $vehicle->plate_number }}</p>
                <p><strong>Marca:</strong> {{ $vehicle->brand ?? 'N/A' }}</p>
                <p><strong>Modelo:</strong> {{ $vehicle->model ?? 'N/A' }}</p>
                <p><strong>Año:</strong> {{ $vehicle->year ?? 'N/A' }}</p>
                <p><strong>Color:</strong> {{ $vehicle->color ?? 'N/A' }}</p>
                <p><strong>Tipo de combustible:</strong> {{ $vehicle->fuel_type ?? 'N/A' }}</p>
                <p><strong>Cliente:</strong> {{ optional($vehicle->customer)->full_name ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
@endsection
