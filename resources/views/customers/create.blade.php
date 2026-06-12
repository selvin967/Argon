@extends('layouts.panel')
@section('title', 'Customers/Create')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <x-crud-card
                title="Registrar Cliente"
                icon="fa-plus-circle"
                back-url="{{ route('customers.index') }}"
                back-text="Volver"
                subtitle="Crea un nuevo cliente"
            >
                @include('customers.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancelar</a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
