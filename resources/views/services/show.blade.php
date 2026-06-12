@extends('layouts.panel')
@section('title', 'Services/Show')

@section('content')
    <x-crud-card
        title="Detalle Servicio"
        icon="fa-concierge-bell"
        back-url="{{ route('services.index') }}"
        back-text="Volver"
        subtitle="Información del servicio"
    >
        <dl class="row">
            <dt class="col-sm-3">Nombre</dt>
            <dd class="col-sm-9">{{ $service->service_name }}</dd>

            <dt class="col-sm-3">Categoría</dt>
            <dd class="col-sm-9">{{ $service->service_category ?? 'N/A' }}</dd>

            <dt class="col-sm-3">Descripción</dt>
            <dd class="col-sm-9">{{ $service->description ?? 'N/A' }}</dd>

            <dt class="col-sm-3">Duración estimada</dt>
            <dd class="col-sm-9">{{ $service->estimated_duration ? $service->estimated_duration . ' min' : 'N/A' }}</dd>

            <dt class="col-sm-3">Precio base</dt>
            <dd class="col-sm-9">${{ number_format($service->base_price, 2) }}</dd>

            <dt class="col-sm-3">Estado</dt>
            <dd class="col-sm-9">{{ ucfirst($service->status) }}</dd>
        </dl>

        <x-slot name="footer">
            <a href="{{ route('services.edit', $service) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Editar
            </a>
        </x-slot>
    </x-crud-card>
@endsection
