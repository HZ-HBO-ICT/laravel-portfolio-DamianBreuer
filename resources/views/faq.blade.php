@extends ('layout')

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
                    {{--TODO: check if there is a link--}}
                    <p>
                        <a href="{{ $post->link }}">{{$post->link}}</a>
                    </p>
                </details>
            @endforeach
        </h2>

        <a href="https://hz.nl/" target="_blank"><img src="img/hz.png" style="position: fixed; width: 165px; height: 45px; left: 25px; top: 695px;" alt="HZ logo"></a>
    </article>
</main>
@endsection
