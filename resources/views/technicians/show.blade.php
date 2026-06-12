@extends('layouts.panel')
@section('title', 'Técnicos/Show')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-user-cog"></i> Detalles del Técnico</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('technicians.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $technician->full_name }}</p>
                <p><strong>Email:</strong> {{ $technician->email }}</p>
                <p><strong>Teléfono:</strong> {{ $technician->phone_number ?? 'N/A' }}</p>
                <p><strong>Fecha de ingreso:</strong> {{ $technician->hire_date?->format('d/m/Y') ?? 'N/A' }}</p>
                <p><strong>Salario:</strong> {{ $technician->salary ?? 'N/A' }}</p>
                <p><strong>Especialidad:</strong> {{ $technician->specialty ?? 'N/A' }}</p>
                <p><strong>Estado:</strong> {{ $technician->status ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
@endsection
