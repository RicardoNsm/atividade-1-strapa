@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Autor</h1>

    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $author->name }}" class="form-control mb-3">

        <button class="btn btn-primary">
            Atualizar
        </button>
    </form>
</div>
@endsection
