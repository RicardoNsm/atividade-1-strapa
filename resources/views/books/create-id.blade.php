@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Adicionar Livro (Com ID)</h1>

    <form action="{{ route('books.store.id') }}" method="POST">
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
            <label class="form-label">ID da Editora</label>

            <input type="number"
                   name="publisher_id"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">ID do Autor</label>

            <input type="number"
                   name="author_id"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">ID da Categoria</label>

            <input type="number"
                   name="category_id"
                   class="form-control"
                   required>
        </div>

        <button class="btn btn-success">
            Salvar
        </button>
    </form>
</div>
@endsection
