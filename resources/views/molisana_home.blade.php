@extends('layouts.main')

@section('content')
    <section class="container">
        <div class="cards">
            @foreach ($cards as $card)
                <div class="card">
                    <a href="">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}" srcset="">
                    <h3>{{ $card['titolo']}}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection