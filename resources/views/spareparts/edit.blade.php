@extends('layouts.panel')
@section('title', 'SpareParts/Edit')

@section('content')
    <div class="col-12">
        <form action="{{ route('spareparts.update', $sparePart) }}" method="POST">
            @csrf
            @method('PUT')
            <x-crud-card
                title="Editar Repuesto"
                icon="fa-edit"
                back-url="{{ route('spareparts.index') }}"
                back-text="Volver"
                subtitle="Actualiza información del repuesto"
            >
                @include('spareparts.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('spareparts.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
