@extends('layouts.panel')
@section('title', 'Vehículos/Edit')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('vehicles.update', $vehicle) }}" method="POST">
            @csrf
            @method('PUT')
            <x-crud-card
                title="Editar Vehículo"
                icon="fa-edit"
                back-url="{{ route('vehicles.index') }}"
                back-text="Volver"
                subtitle="Actualizar información del vehículo"
            >
                @include('vehicles.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
