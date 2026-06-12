@extends('layouts.panel')
@section('title', 'Mantenimientos/Show')

@php
    /** @var \App\Models\Maintenance $maintenance */
@endphp

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-tools"></i> Detalles de Mantenimiento</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('maintenances.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="heading-small text-muted mb-4">Información General</h6>
                        <div class="pl-lg-4">
                            <p><strong>Vehículo:</strong> {{ optional($maintenance->vehicle)->plate_number ?? 'N/A' }}</p>
                            <p><strong>Técnico:</strong> {{ optional($maintenance->technician)->full_name ?? 'N/A' }}</p>
                            <p><strong>Tipo de servicio:</strong> {{ $maintenance->service_type ?? 'N/A' }}</p>
                            <p><strong>Fecha de entrada:</strong> {{ $maintenance->entry_date?->format('d/m/Y') ?? 'N/A' }}</p>
                            <p><strong>Fecha estimada de entrega:</strong> {{ $maintenance->estimated_delivery_date?->format('d/m/Y') ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="heading-small text-muted mb-4">Costos</h6>
                        <div class="pl-lg-4">
                            <p><strong>Kilometraje actual:</strong> {{ $maintenance->current_mileage ?? 'N/A' }}</p>
                            <p><strong>Costo repuestos:</strong> {{ $maintenance->spare_parts_cost ?? '0.00' }}</p>
                            <p><strong>Costo mano de obra:</strong> {{ $maintenance->labor_cost ?? '0.00' }}</p>
                            <p><strong>Costo total:</strong> {{ $maintenance->total_cost ?? '0.00' }}</p>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="heading-small text-muted mb-4">Descripción del trabajo</h6>
                        <div class="pl-lg-4">
                            <p>{{ $maintenance->work_description ?? 'No especificada' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
