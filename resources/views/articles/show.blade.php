@extends ('layout')

@section('title', 'Test')

@section('content')
    <main>
        <article>
            <h1>{{ $article->title }}</h1>

            <a href="https://hz.nl/" target="_blank"><img src="/img/hz.png" style="position: fixed; width: 165px; height: 45px; left: 25px; top: 695px;" alt="HZ logo"></a>
            {{ $article->body }}
        </article>
    </main>
@endsection
