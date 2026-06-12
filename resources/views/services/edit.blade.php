@extends('layouts.panel')
@section('title', 'Services/Edit')

@section('content')
    <div class="col-12">
        <form action="{{ route('services.update', $service) }}" method="POST">
            @csrf
            @method('PUT')
            <x-crud-card
                title="Editar Servicio"
                icon="fa-edit"
                back-url="{{ route('services.index') }}"
                back-text="Volver"
                subtitle="Actualiza los datos del servicio"
            >
                @include('services.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
