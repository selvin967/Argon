@extends('layouts.panel')
@section('title', 'Técnicos/Show')

@section('content')
    <x-crud-card
        title="Detalles del Técnico"
        icon="fa-user-cog"
        back-url="{{ route('technicians.index') }}"
        back-text="Volver"
        subtitle="Perfil y datos del técnico"
    >
        <p><strong>Nombre:</strong> {{ $technician->full_name }}</p>
        <p><strong>Email:</strong> {{ $technician->email }}</p>
        <p><strong>Teléfono:</strong> {{ $technician->phone_number ?? 'N/A' }}</p>
        <p><strong>Fecha de ingreso:</strong> {{ $technician->hire_date?->format('d/m/Y') ?? 'N/A' }}</p>
        <p><strong>Salario:</strong> {{ $technician->salary ?? 'N/A' }}</p>
        <p><strong>Especialidad:</strong> {{ $technician->specialty ?? 'N/A' }}</p>
        <p><strong>Estado:</strong> {{ $technician->status ?? 'N/A' }}</p>

        <x-slot name="footer">
            <a href="{{ route('technicians.edit', $technician) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Editar
            </a>
        </x-slot>
    </x-crud-card>
@endsection
