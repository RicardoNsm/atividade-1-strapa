@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Autores</h1>

    <a href="{{ route('authors.create') }}" class="btn btn-success mb-3">
        Novo Autor
    </a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>

        @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>
                <a href="{{ route('authors.show', $author) }}" class="btn btn-info">
                    Ver
                </a>

                <a href="{{ route('authors.edit', $author) }}" class="btn btn-primary">
                    Editar
                </a>

                <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
