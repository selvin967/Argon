@extends('layouts.panel')
@section('title', 'Services/Create')

@section('content')
    <div class="col-12">
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <x-crud-card
                title="Nuevo Servicio"
                icon="fa-plus"
                back-url="{{ route('services.index') }}"
                back-text="Volver"
                subtitle="Agregar un nuevo servicio"
            >
                @include('services.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
