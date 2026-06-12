@extends('layouts.app')

@section('content')
    <h1>Mostrar Servicio</h1>
    <p>Nombre: {{ $service->service_name }}</p>
    <p>Categoría: {{ $service->service_category }}</p>
    <p>Precio base: {{ $service->base_price }}</p>
@endsection
