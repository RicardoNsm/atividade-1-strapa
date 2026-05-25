@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Autor</h1>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf

        <input type="text" name="name" class="form-control mb-3">

        <button class="btn btn-success">
            Salvar
        </button>
    </form>
</div>
@endsection
