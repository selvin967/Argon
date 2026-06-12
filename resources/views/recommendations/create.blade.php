@extends('layouts.panel')
@section('title', 'Recomendaciones/Create')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('recommendations.store') }}" method="POST">
            @csrf
            <x-crud-card
                title="Crear Recomendación"
                icon="fa-plus-circle"
                back-url="{{ route('recommendations.index') }}"
                back-text="Volver"
                subtitle="Agregar una nueva recomendación"
            >
                @include('recommendations.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                    <a href="{{ route('recommendations.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
