@extends('layouts.panel')
@section('title', 'Vehículos/Show')

@section('content')
    <x-crud-card
        title="Detalles del Vehículo"
        icon="fa-car"
        back-url="{{ route('vehicles.index') }}"
        back-text="Volver"
        subtitle="Información técnica del vehículo"
    >
        <p><strong>Matrícula:</strong> {{ $vehicle->plate_number }}</p>
        <p><strong>Marca:</strong> {{ $vehicle->brand ?? 'N/A' }}</p>
        <p><strong>Modelo:</strong> {{ $vehicle->model ?? 'N/A' }}</p>
        <p><strong>Año:</strong> {{ $vehicle->year ?? 'N/A' }}</p>
        <p><strong>Color:</strong> {{ $vehicle->color ?? 'N/A' }}</p>
        <p><strong>Tipo de combustible:</strong> {{ $vehicle->fuel_type ?? 'N/A' }}</p>
        <p><strong>Cliente:</strong> {{ optional($vehicle->customer)->full_name ?? 'N/A' }}</p>

        <x-slot name="footer">
            <a href="{{ route('vehicles.edit', $vehicle) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Editar
            </a>
        </x-slot>
    </x-crud-card>
@endsection
