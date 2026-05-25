@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Livro</h1>

    <form action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Título</label>

            <input type="text"
                   name="title"
                   value="{{ $book->title }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Páginas</label>

            <input type="number"
                   name="pages"
                   value="{{ $book->pages }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Editora</label>

            <select name="publisher_id" class="form-select">
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}"
                        {{ $publisher->id == $book->publisher_id ? 'selected' : '' }}>
                        {{ $publisher->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Autor</label>

            <select name="author_id" class="form-select">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}"
                        {{ $author->id == $book->author_id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Categoria</label>

            <select name="category_id" class="form-select">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $category->id == $book->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        
        <div class="mb-3">
    <label class="form-label">
        Nova Capa
    </label>

    <input
        type="file"
        name="cover_image"
        class="form-control"
    >
    </div>


        <button class="btn btn-success">
            Atualizar
        </button>
    </form>
</div>
@endsection
