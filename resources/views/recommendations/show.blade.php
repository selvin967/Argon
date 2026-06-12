@extends('layouts.panel')
@section('title', 'Recomendaciones/Show')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-lightbulb"></i> Detalles de Recomendación</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('recommendations.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Vehículo:</strong> {{ optional($recommendation->vehicle)->plate_number ?? 'N/A' }}</p>
                <p><strong>Recomendación:</strong> {{ $recommendation->recommendation_text ?? 'N/A' }}</p>
                <p><strong>Fecha recomendada:</strong> {{ $recommendation->recommended_date?->format('d/m/Y') ?? 'N/A' }}</p>
                <p><strong>Kilometraje recomendado:</strong> {{ $recommendation->recommended_mileage ?? 'N/A' }}</p>
                <p><strong>Prioridad:</strong> {{ $recommendation->priority ?? 'N/A' }}</p>
                <p><strong>Estado:</strong> {{ $recommendation->status ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
@endsection
