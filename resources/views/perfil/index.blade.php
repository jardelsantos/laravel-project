@extends('layout')


@section('content')
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Detalhes</th>
            <th width="280px">Ações</th>
        </tr>

        @foreach ($listaPerfil as $perfil)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $perfil->name }}</td>
                <td>{{ $perfil->email }}</td>
                <td>{{ $perfil->detail }}</td>

                <td>
                    <form action="{{ route('perfil.destroy',$perfil->id) }}" method="POST">
                        @csrf

                        <a class="btn btn-info" href="{{ route('perfil.show',$perfil->id) }}">
                            Visualizar</a>

                        <a class="btn btn-primary" href="{{ route('perfil.edit',$perfil->id) }}">
                            Editar</a>

                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table>

    {!! $listaPerfil->links() !!}

@endsection
