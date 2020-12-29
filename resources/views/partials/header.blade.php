{{-- HEADER pagina--}}

<header>
    <a href="/" class="brand">
        <img src="{{ asset('img/logo.png')}}" alt="la molisana">
    </a>
    <div class="sidebar">
        <a class="target" href="/">Home</a>
        <a class="target" href="{{ route('product', $id = 0 ) }}">Prodotti</a>
        <a class="target">News</a>
    </div>
</header>