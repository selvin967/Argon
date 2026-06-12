@extends('layouts.panel')
@section('title', 'Mantenimientos/Edit')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('maintenances.update', $maintenance) }}" method="POST">
            @csrf
            @method('PUT')
            <x-crud-card
                title="Editar Mantenimiento"
                icon="fa-edit"
                back-url="{{ route('maintenances.index') }}"
                back-text="Volver"
                subtitle="Modificar datos y costos"
            >
                @include('maintenances.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('maintenances.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
