@extends('layouts.panel')
@section('title', 'Recomendaciones/Edit')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('recommendations.update', $recommendation) }}" method="POST">
            @csrf
            @method('PUT')
            <x-crud-card
                title="Editar Recomendación"
                icon="fa-edit"
                back-url="{{ route('recommendations.index') }}"
                back-text="Volver"
                subtitle="Actualizar recomendación"
            >
                @include('recommendations.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('recommendations.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
