@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="mb-4">Usuários</h1>

    <table class="table table-striped">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            @foreach($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>

                    <a href="{{ route('users.show', $user) }}"
                        class="btn btn-info btn-sm">
                        Ver
                    </a>

                    <a href="{{ route('users.edit', $user) }}"
                        class="btn btn-primary btn-sm">
                        Editar
                    </a>

                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

    {{ $users->links() }}

</div>
@endsection
