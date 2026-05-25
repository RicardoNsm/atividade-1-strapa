@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="my-4">{{ $book->title }}</h1>

    <div class="mb-4 text-center">

    <img
        src="{{ $book->cover_image
            ? asset('storage/' . $book->cover_image)
            : asset('images/default-cover.png') }}"
        class="img-fluid rounded"
        width="250"
    >

    </div>


    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Autor:</strong> {{ $book->author->name }}</p>
            <p><strong>Editora:</strong> {{ $book->publisher->name }}</p>
            <p><strong>Categoria:</strong> {{ $book->category->name }}</p>
            <p><strong>Páginas:</strong> {{ $book->pages }}</p>
        </div>
    </div>

    <!-- Formulário Empréstimo -->
    <div class="card mb-4">
        <div class="card-header">
            Registrar Empréstimo
        </div>

        <div class="card-body">
            <form action="{{ route('books.borrow', $book) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Usuário</label>

                    <select name="user_id" class="form-select" required>
                        <option value="">Selecione um usuário</option>

                        @foreach($users as $user)
                            <option value="{{ $user->id }}">
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-success">
                    Registrar Empréstimo
                </button>
            </form>
        </div>
    </div>

    <!-- Histórico -->
    <div class="card">
        <div class="card-header">
            Histórico de Empréstimos
        </div>

        <div class="card-body">

            @if($book->users->isEmpty())
                <p>Nenhum empréstimo registrado.</p>
            @else

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th>Empréstimo</th>
                            <th>Devolução</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($book->users as $user)
                            <tr>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}">
                                        {{ $user->name }}
                                    </a>
                                </td>

                                <td>
                                    {{ $user->pivot->borrowed_at }}
                                </td>

                                <td>
                                    {{ $user->pivot->returned_at ?? 'Em Aberto' }}
                                </td>

                                <td>
                                    @if(is_null($user->pivot->returned_at))
                                        <form action="{{ route('borrowings.return', $user->pivot->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')

                                            <button class="btn btn-warning btn-sm">
                                                Devolver
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            @endif

        </div>
    </div>
</div>

@endsection
