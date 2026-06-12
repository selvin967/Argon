@extends('layouts.panel')
@section('title', 'Vehículos/Create')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('vehicles.store') }}" method="POST">
            @csrf
            <x-crud-card
                title="Crear Vehículo"
                icon="fa-plus-circle"
                back-url="{{ route('vehicles.index') }}"
                back-text="Volver"
                subtitle="Agregar un nuevo vehículo"
            >
                @include('vehicles.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                    <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
