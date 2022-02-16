@extends ('layout')

@section('title', 'FAQ')

@section('content')
<main>
    <article>
        <h1>Here are some questions that are asked frequently:</h1>
        <h2>
            @foreach($posts as $post)
                <details style = "margin-bottom: 35px;">
                    <summary>{{ $post->question }}</summary>
                    <p>
                        {{$post->answer}}
                    </p>

                    @if($post->link != null)
                    <p>
                        <a target="_blank" href="{{ $post->link }}">{{$post->link}}</a>
                    </p>
                    @endif

                </details>
            @endforeach
        </h2>

        <button type="button" class="knop"><a href="faq/create">Create Question</a></button>

        <a href="https://hz.nl/" target="_blank"><img src="img/hz.png" style="position: fixed; width: 165px; height: 45px; left: 25px; top: 695px;" alt="HZ logo"></a>
    </article>
</main>
@endsection
