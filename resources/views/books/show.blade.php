@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Detalhes do Livro</h1>

    <div class="card">
        <div class="card-header">
            {{ $book->title }}
        </div>

        <div class="card-body">
            <p>
                <strong>Autor:</strong>
                {{ $book->author->name }}
            </p>

            <p>
                <strong>Editora:</strong>
                {{ $book->publisher->name }}
            </p>

            <p>
                <strong>Categoria:</strong>
                {{ $book->category->name }}
            </p>

            <p>
                <strong>Páginas:</strong>
                {{ $book->pages }}
            </p>
        </div>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">
        Voltar
    </a>
</div>
@endsection
