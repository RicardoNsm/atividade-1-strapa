@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Categoria</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nome</label>

            <input type="text"
                   name="name"
                   value="{{ $category->name }}"
                   class="form-control">
        </div>

        <button class="btn btn-primary">
            Atualizar
        </button>
    </form>
</div>
@endsection
