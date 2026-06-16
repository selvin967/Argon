@extends('layouts.panel')
@section('title', 'SpareParts/Edit')

@section('content')
    <div class="row">
        <div class="col-xl-12 order-xl-1">
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
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Actualizar
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
