@extends('layouts.panel')
@section('title', 'SpareParts/Show')

@section('content')
    <x-crud-card
        title="Detalle Repuesto"
        icon="fa-boxes"
        back-url="{{ route('spareparts.index') }}"
        back-text="Volver"
        subtitle="Detalles y stock del repuesto"
    >
        <dl class="row">
            <dt class="col-sm-3">Nombre</dt>
            <dd class="col-sm-9">{{ $sparePart->part_name }}</dd>

            <dt class="col-sm-3">Marca</dt>
            <dd class="col-sm-9">{{ $sparePart->brand ?? 'N/A' }}</dd>

            <dt class="col-sm-3">Descripción</dt>
            <dd class="col-sm-9">{{ $sparePart->description ?? 'N/A' }}</dd>

            <dt class="col-sm-3">Precio unitario</dt>
            <dd class="col-sm-9">${{ number_format($sparePart->unit_price, 2) }}</dd>

            <dt class="col-sm-3">Stock</dt>
            <dd class="col-sm-9">{{ $sparePart->stock_quantity }}</dd>

            <dt class="col-sm-3">Proveedor</dt>
            <dd class="col-sm-9">{{ $sparePart->supplier ?? 'N/A' }}</dd>

            <dt class="col-sm-3">Fecha de compra</dt>
            <dd class="col-sm-9">{{ optional($sparePart->purchase_date)->format('Y-m-d') ?? 'N/A' }}</dd>

            <dt class="col-sm-3">Estado</dt>
            <dd class="col-sm-9">{{ ucfirst($sparePart->status) }}</dd>
        </dl>

        <x-slot name="footer">
            <a href="{{ route('spareparts.edit', $sparePart) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Editar
            </a>
        </x-slot>
    </x-crud-card>
@endsection
