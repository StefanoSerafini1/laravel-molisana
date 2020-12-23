{{-- utilizzo if per capire se l'array utilizzato è vuoto in modo da non dover mostrare la sezione --}}
@if(! empty($cards))
<section class="type-section container">
    <h2>{{ $title }}</h2>
    <div class="cards">
        {{-- utilizzo foreach su array lunghe cioè prodotti con tipologia lunga  --}}
        @foreach ($cards as $card)
            <div class="card">
                <a href="{{ route('product', $card['id']) }}">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}" srcset="">
                <h3>{{ $card['titolo']}}</h3>
                </a>
            </div>
        @endforeach
    </div>
</section>
@endif