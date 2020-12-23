@extends('layouts.main')

@section('content')

    <section class="prodotto {{ $product['src-h'] }}">
        <div class="container">
            <div class="navigazione">
                @if ($id > 0)
                <a href="{{ route('product', $id - 1 ) }}" >&lt; Prodotto precedente</a>
                @endif
                @if ($id < $length)
                    <a href="{{ route('product', $id + 1 ) }}" > Prodotto successivo &gt;</a>
                @endif
            </div>
            <div class="hero">
                <h1></h1>
                <img src="{{ $product ['src-h']}}" alt="{{ $product['titolo']}}">
                <img src="{{ $product ['src-p']}}" alt="{{ $product['titolo']}}">
            </div>
            <div class="descrizione">
                <p> {!! $product ['descrizione'] !!}</p>
            </div>
        </div>
    </section>
    
@endsection
