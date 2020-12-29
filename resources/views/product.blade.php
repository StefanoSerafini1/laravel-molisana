@extends('layouts.main')

@section('content')

    <section class="prodotto {{ $product['src-h'] }}">
        <div class="navigazione">
            @if ($id > 0)
                <a class="precedente" href="{{ route('product', $id - 1 ) }}" >&lt;<i class="fas fa-angle-left"></i></a>
            @elseif ($id <= 0)
                <a class="precedente" href="{{ route('product', $length - 1) }}" >&lt;<i class="fas fa-angle-left"></i></a>
            @endif
            @if ($id < $length)
                <a class="successivo" href="{{ route('product', $id + 1 ) }}" ><i class="fas fa-angle-right"></i>&gt;</a>
            @elseif($id >= $length)
                <a class="successivo" href="{{ route('product', $id = 0 ) }}" ><i class="fas fa-angle-right"></i>&gt;</a>
            @endif
        </div>
        <div class="container">
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
