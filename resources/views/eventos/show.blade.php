@extends('layouts.app')

@section('titulo', $evento['titulo'])

@section('conteudo')
    <p><a href="{{ route('eventos.index') }}" role="button" class="primary">Voltar aos eventos</a></p>

    <h1>{{ $evento['titulo'] }}</h1>

    <!-- Só aparece quando não há vagas disponíveis -->
    @if ($evento['inscritos'] >= $evento['vagas'])
        <p><strong>Este evento está esgotado.</strong></p>
    @endif

    <p><strong>Tipo:</strong> {{ $evento['tipo'] }}</p>
    <p><strong>Data:</strong> {{ date('d/m/Y', strtotime($evento['data'])) }}</p>
    <p><strong>Local:</strong> {{ $evento['local'] }}</p>
    <p><strong>Inscritos:</strong> {{ $evento['inscritos'] }} de {{ $evento['vagas'] }}</p>
@endsection