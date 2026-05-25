@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Categoria</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome</label>

            <input type="text"
                   name="name"
                   class="form-control">
        </div>

        <button class="btn btn-success">
            Salvar
        </button>
    </form>
</div>
@endsection
