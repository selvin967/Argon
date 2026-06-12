@extends('layouts.panel')
@section('title', 'Repuestos/Show')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i> Mostrar Repuesto</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('spareparts.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body container-fluid">
                <p><strong>Nombre:</strong> {{ $sparePart->part_name }}</p>
                <p><strong>Marca:</strong> {{ $sparePart->brand ?? 'N/A' }}</p>
                <p><strong>Precio unitario:</strong> {{ $sparePart->unit_price ?? '0.00' }}</p>
                <p><strong>Stock:</strong> {{ $sparePart->stock_quantity ?? '0' }}</p>
                <p><strong>Proveedor:</strong> {{ $sparePart->supplier ?? 'N/A' }}</p>
                <p><strong>Fecha de compra:</strong> {{ $sparePart->purchase_date ?? 'N/A' }}</p>
                <p><strong>Estado:</strong> {{ ucfirst($sparePart->status ?? 'N/A') }}</p>
                <p><strong>Descripción:</strong></p>
                <div class="border rounded p-3 bg-white">
                    {{ $sparePart->description ?? 'Sin descripción' }}
                </div>
            </div>
        </div>
    </div>
@endsection
