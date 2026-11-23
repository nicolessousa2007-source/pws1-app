<!-- Cartão de um evento -->
@props(['evento'])

<!-- Juntar a classe 'cartao' às que a view enviar -->
<article {{ $attributes->merge(['class' => 'cartao']) }}>
    <!-- Tipo do evento (a classe que no futuro irá permitir uma cor por tipo) -->
    <span class="etiqueta etiqueta-{{ $evento->tipo?->slug ?? 'Sem tipo' }}">{{ ($evento->tipo?->nome ?? 'Sem tipo') }}
    </span>

    <h3>
        <a href="{{ route('eventos.show', $evento->id) }}">{{ $evento->titulo }}</a>
    </h3>

    <!-- Data do evento -->
    <p>{{ $evento->data->format('d/m/Y') }} · {{ $evento->local }}</p>
</article>