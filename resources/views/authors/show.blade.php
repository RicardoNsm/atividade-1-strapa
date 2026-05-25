@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Autor</h1>

    <p>ID: {{ $author->id }}</p>
    <p>Nome: {{ $author->name }}</p>
</div>
@endsection
