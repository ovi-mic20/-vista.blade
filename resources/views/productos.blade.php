@extends('layouts.app')

@section('titulo', 'Productos')

@section('contenido')
<h2>Listado de productos</h2>

<p>Estos productos son orgánicos y 100% hechos en Argentina.</p>

@forelse($productos as $producto)
<div class="producto">
    <h3>{{ $producto['nombre'] }}</h3>

    <p>Precio: ${{ $producto['precio'] }}</p>

    @if($producto['stock'] > 0)
    <p class="con-stock">Stock disponible: {{ $producto['stock'] 
}}</p>
    @else
    <p class="sin-stock">Sin stock</p>
    @endif
    @if($producto['precio'] > 1200)
    <p>Producto destacado</p>
    @endif
</div>
@empty
<p>No hay stock.</p>
@endforelse
@endsection