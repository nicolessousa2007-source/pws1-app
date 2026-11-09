<!-- Cartão de um evento -->
@props(['evento'])

<!-- Juntar a classe 'cartao' às que a view enviar -->
<article {{ $attributes->merge(['class' => 'cartao']) }}>
    <!-- Tipo do evento (a classe que no futuro irá permitir uma cor por tipo) -->
    <span class="etiqueta etiqueta-
        {{ $evento['tipo'] }}">{{ ucfirst($evento['tipo']) }}
    </span>

    <h3>
        <a href="{{ route('eventos.show', $evento['id']) }}">{{ $evento['titulo'] }}</a>
    </h3>

    <!-- Data do evento -->
    <p>{{ date('d/m/Y', strtotime($evento['data'])) }} · {{ $evento['local'] }}</p>
</article>