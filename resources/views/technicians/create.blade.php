@extends('layouts.panel')
@section('title', 'Técnicos/Create')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('technicians.store') }}" method="POST">
            @csrf
            <x-crud-card
                title="Crear Técnico"
                icon="fa-plus-circle"
                back-url="{{ route('technicians.index') }}"
                back-text="Volver"
                subtitle="Agregar un nuevo técnico"
            >
                @include('technicians.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                    <a href="{{ route('technicians.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
