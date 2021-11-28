@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
        
        <h1>Actividad de Avance 1: caso practico MVC 1</h1>
        <a href="{{ route('Category.index', ['id'=>1]) }}" class="btn btn-primary">Categorías</a>
        
    </div>
    
@endsection