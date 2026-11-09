<!-- <!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha aplicação Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class= "container mt-5">
        <h1 class= "text-dark">Olá, Laravel!!!</h1>
        <a href="/perfil" class="btn btn-primary">Ver Perfil</a>
    </div>
</body>
</html> -->


@extends('layouts.app')

@section('titulo', 'Início')

<!-- Desafio: Uma cor por tipo, só nesta página -->
@push('estilos')
    <style>
        .etiqueta-workshop {color: #1f6f8b;}
        .etiqueta-palestra {color: #8a2044;}
        .etiqueta-hackathon {color: #8a5a00;}
    </style>
@endpush

@section('conteudo')
    <h1 class="text-dark">{{ config('app.name') }}</h1>
    <p>Workshops, palestras e hackathons do ISLA Gaia.</p>
    <p><a href="{{ route('eventos.index') }}" role="button" class="botao">Ver eventos</a></p>

    <h2>Próximos eventos</h2>
    <div class="grelha">
        @forelse ($proximos as $evento)
            <x-cartao-evento :evento="$evento"/>
        @empty
            <x-alerta tipo="aviso">Ainda não há eventos marcados.</x-alerta>
        @endforelse
    </div>
@endsection


