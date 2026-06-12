@extends('layouts.panel')
@section('title', 'Customers/Edit')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <form action="{{ route('customers.update', $customer) }}" method="POST">
            @csrf
            @method('PUT')
            <x-crud-card
                title="Editar Cliente"
                icon="fa-edit"
                back-url="{{ route('customers.index') }}"
                back-text="Volver"
                subtitle="Modifica los datos del cliente"
            >
                @include('customers.form')

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Actualizar
                    </button>
                    <a href="{{ route('customers.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancelar
                    </a>
                </x-slot>
            </x-crud-card>
        </form>
    </div>
@endsection
