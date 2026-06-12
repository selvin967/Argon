@extends('layouts.panel')
@section('title', 'Técnicos/Edit')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('technicians.update', $technician) }}" method="POST">
            @csrf
            @method('PUT')
            <x-crud-card
                title="Editar Técnico"
                icon="fa-edit"
                back-url="{{ route('technicians.index') }}"
                back-text="Volver"
                subtitle="Modificar datos del técnico"
            >
                @include('technicians.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('technicians.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
