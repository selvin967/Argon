@extends('layouts.panel')
@section('title', 'Mantenimientos/Create')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('maintenances.store') }}" method="POST">
            @csrf
            <x-crud-card
                title="Crear Mantenimiento"
                icon="fa-plus-circle"
                back-url="{{ route('maintenances.index') }}"
                back-text="Volver"
                subtitle="Registrar un nuevo mantenimiento"
            >
                @include('maintenances.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                    <a href="{{ route('maintenances.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
