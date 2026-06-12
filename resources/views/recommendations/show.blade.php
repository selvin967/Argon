@extends('layouts.panel')
@section('title', 'Recomendaciones/Show')

@section('content')
    <x-crud-card
        title="Detalles de Recomendación"
        icon="fa-lightbulb"
        back-url="{{ route('recommendations.index') }}"
        back-text="Volver"
        subtitle="Información y prioridad"
    >
        <p><strong>Vehículo:</strong> {{ optional($recommendation->vehicle)->plate_number ?? 'N/A' }}</p>
        <p><strong>Recomendación:</strong> {{ $recommendation->recommendation_text ?? 'N/A' }}</p>
        <p><strong>Fecha recomendada:</strong> {{ $recommendation->recommended_date?->format('d/m/Y') ?? 'N/A' }}</p>
        <p><strong>Kilometraje recomendado:</strong> {{ $recommendation->recommended_mileage ?? 'N/A' }}</p>
        <p><strong>Prioridad:</strong> {{ $recommendation->priority ?? 'N/A' }}</p>
        <p><strong>Estado:</strong> {{ $recommendation->status ?? 'N/A' }}</p>

        <x-slot name="footer">
            <a href="{{ route('recommendations.edit', $recommendation) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Editar
            </a>
        </x-slot>
    </x-crud-card>
@endsection
