@extends('layouts.panel')
@section('title', 'Customers/Show')

@section('content')
    <x-crud-card
        title="Detalles del Cliente"
        icon="fa-user"
        back-url="{{ route('customers.index') }}"
        back-text="Volver"
        subtitle="Revisa la información general y actualiza el registro si es necesario."
    >
        <div class="row">
            <div class="col-lg-6">
                <h6 class="heading-small text-muted mb-4">Información Personal</h6>
                <div class="pl-lg-4">
                    <div class="mb-3">
                        <span class="badge badge-dark">Nombre Completo</span>
                        <p class="mt-2">{{ $customer->full_name }}</p>
                    </div>
                    <div class="mb-3">
                        <span class="badge badge-dark">Email</span>
                        <p class="mt-2">{{ $customer->email }}</p>
                    </div>
                    <div class="mb-3">
                        <span class="badge badge-dark">Teléfono</span>
                        <p class="mt-2">{{ $customer->phone_number ?? 'No especificado' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="heading-small text-muted mb-4">Información de Contacto</h6>
                <div class="pl-lg-4">
                    <div class="mb-3">
                        <span class="badge badge-dark">Dirección</span>
                        <p class="mt-2">{{ $customer->address ?? 'No especificada' }}</p>
                    </div>
                    <div class="mb-3">
                        <span class="badge badge-dark">Ciudad</span>
                        <p class="mt-2">{{ $customer->city ?? 'No especificada' }}</p>
                    </div>
                    <div class="mb-3">
                        <span class="badge badge-dark">Fecha de Registro</span>
                        <p class="mt-2">{{ $customer->registration_day ? $customer->registration_day->format('d/m/Y') : 'No especificada' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4" />
        <div class="row">
            <div class="col-lg-12">
                <h6 class="heading-small text-muted mb-4">Estado</h6>
                <div class="pl-lg-4">
                    @if($customer->status == 'active')
                        <span class="badge badge-success badge-lg">Activo</span>
                    @else
                        <span class="badge badge-danger badge-lg">Inactivo</span>
                    @endif
                </div>
            </div>
        </div>
    </x-crud-card>
@endsection
