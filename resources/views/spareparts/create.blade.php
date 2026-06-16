@extends('layouts.panel')
@section('title', 'SpareParts/Create')

@section('content')
    <div class="row">
        <div class="col-xl-12 order-xl-1">
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
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Guardar
                        </button>
                        <a href="{{ route('spareparts.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancelar
                        </a>
                    </x-slot>
                </x-crud-card>
            </form>
        </div>
    </div>
@endsection
