@extends('theme.base')

@section('content')

    <div>
        <div class="container py-5 text-center">
        <h1>Lista de categorias</h1>
        <a href="{{ route('Category.create', ['id'=>1]) }}" class="btn btn-primary">Crear Categorías</a>
        <table class="table table-striped">
            <thead>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acción</th>
            </thead>
            <tbody>
                <tr>
                    <td>Electrodomesticos cocina</td>
                    <td>Electrodomesticos para uso de cocina</td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection