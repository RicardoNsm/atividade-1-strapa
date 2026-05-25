@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Adicionar Livro (Com Select)</h1>

    <form action="{{ route('books.store.select') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">Título</label>

            <input type="text"
                   name="title"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Páginas</label>

            <input type="number"
                   name="pages"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Editora</label>

            <select name="publisher_id" class="form-select">
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}">
                        {{ $publisher->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Autor</label>

            <select name="author_id" class="form-select">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Categoria</label>

            <select name="category_id" class="form-select">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Capa do Livro</label>

            <input type="file"
                   name="cover_image"
                   class="form-control">
        </div>

        <button class="btn btn-success">
            Salvar
        </button>
    </form>
</div>
@endsection
