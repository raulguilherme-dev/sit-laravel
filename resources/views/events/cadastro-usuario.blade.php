@extends('layouts.main')

@section('title', 'Cadastro de Usuários')

@section('content')

<main>
    <h1>Cadastrar um novo usuário</h1>
    <form action='/events' method='POST'>
        @csrf
        <div>
            <div>   
                <label for="login">Login:</label>
                <input type="text" id='login' name='login' placeholder='Login do usuário'>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id='senha' name='senha' placeholder='Senha do usuário'>
            </div>
            <input type="submit" value="Cadastrar usuário">
        </div>
    </form>
</main>

@endsection