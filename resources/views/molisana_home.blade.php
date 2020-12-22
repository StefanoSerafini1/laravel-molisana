@extends('layouts.main')

@section('content')
{{-- utilizzo if per capire se l'array utilizzato è vuoto in modo da non dover mostrare la sezione --}}
    @if(! empty($lunghe))
    <section class="type-section container">
        <h2>LE LUNGHE</h2>
        <div class="cards">
            {{-- utilizzo foreach su array lunghe cioè prodotti con tipologia lunga  --}}
            @foreach ($lunghe as $card)
                <div class="card">
                    <a href="">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}" srcset="">
                    <h3>{{ $card['titolo']}}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    @if (! @empty($corte))
        <section class="type-section container">
        <h2>LE CORTE</h2>
        <div class="cards">
            @foreach ($corte as $card)
                <div class="card">
                    <a href="">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}" srcset="">
                    <h3>{{ $card['titolo']}}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    @endif
    
    @if(! empty($cortissime))
    <section class="type-section container">
        <h2>LE CORTISSIME</h2>
        <div class="cards">
            @foreach ($cortissime as $card)
                <div class="card">
                    <a href="">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}" srcset="">
                    <h3>{{ $card['titolo']}}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    @endif
@endsection