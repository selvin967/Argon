@extends('layouts.panel')
@section('title', 'SpareParts/Create')

@section('content')
    <div class="col-12">
        <form action="{{ route('spareparts.store') }}" method="POST">
            @csrf
            <x-crud-card
                title="Nuevo Repuesto"
                icon="fa-plus"
                back-url="{{ route('spareparts.index') }}"
                back-text="Volver"
                subtitle="Agregar un nuevo repuesto"
            >
                @include('spareparts.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('spareparts.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
