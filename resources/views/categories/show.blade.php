@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Categoria</h1>

    <div class="card">
        <div class="card-body">
            <p>ID: {{ $category->id }}</p>
            <p>Nome: {{ $category->name }}</p>
        </div>
    </div>
</div>
@endsection
