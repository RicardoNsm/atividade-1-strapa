@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Sistema Biblioteca</h1>

    <div class="row g-3">

        <div class="col-md-3">
            <a href="{{ route('categories.index') }}" class="btn btn-primary w-100">
                Categorias
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('authors.index') }}" class="btn btn-success w-100">
                Autores
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('publishers.index') }}" class="btn btn-warning w-100">
                Editoras
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('books.index') }}" class="btn btn-dark w-100">
                Livros
            </a>
        </div>

    </div>
</div>
@endsection
