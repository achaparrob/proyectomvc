@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Crear de Categorías</h1>

        <form action="{{ route('Category.store') }}" method="post">
            @csrf

        </form>
        <div class="mv3">
            <label for="name" class="form-label" style=font-size: 20px>Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Nombre de la categoría" >
            <p class='form-text'>Escriba el nombre de la Categoría</p>
            @error('name')
            <p class='form-text text-danger'>{{ $message }}</p>
            @enderror

        </div>
        <div class="mv3">
            <label for="description" class="form-label">Descripción</label>
            <textarea  name="description" cols="122" rows="3"placeholder="Descripción de la Categoría" class="form-control" ></textarea>
            <p class='form-text'>Escriba Una Breve Descripción de la Categoría</p>
            @error('description')
            <p class='form-text text-danger'>{{ $message }}</p>
            @enderror

        </div>

        <button type="submit" class='btn btn-primary'>Guardar Categoría</button>

    </div>
@endsection