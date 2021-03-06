@extends('articulo.plantilla')

@section('contenido')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Lista de artículos</span>
                    </div>

                    <div class="card-body">      
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio por unidad</th>
                                <th scope="col">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articulos as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->descripcion }}</td>
                                    <td>{{ $item->precioUnidad }}</td>
                                    <td>{{ $item->stock }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$articulos->links()}}
                    {{-- fin card body --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection