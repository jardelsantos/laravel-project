@extends('layout')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary" href="{{ route('perfil.index') }}"> Voltar</a>
        </div>
        <div class="col-6  text-end">
            <h2>Editar</h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ocorrem erros!<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('perfil.update', $perfil->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-nome" class="form-label">Nome:</label>
                    <input type="text" id="campo-nome" name="name" class="form-control" placeholder="Nome" value="{{ $perfil->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-email" class="form-label">E-mail:</label>
                    <input type="text" id="campo-email" name="email" class="form-control" placeholder="E-mail" value="{{ $perfil->email }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-detalhes" class="form-label">Detalhes:</label>
                    <textarea class="form-control" id="campo-detalhes" style="height:150px" name="detail" placeholder="Detalhes">{{ $perfil->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection
