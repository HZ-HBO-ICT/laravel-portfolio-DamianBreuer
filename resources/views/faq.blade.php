<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="blog">Blog</a></li>
        <li><a class="active" href="faq">FAQ</a></li>
        <li><a href="dashboard">Dashboard</a></li>
        <li style="float:right"><a href="contact">Contact</a></li>
    </ul>
    <div class="sidebar">
        <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">HZ Onderwijs en Examenregelingen</a>
        <a href="https://learn.hz.nl/my/" target="_blank">HZ Learn</a>
        <a href="https://www.microsoft.com/nl-nl/microsoft-teams/log-in" target="_blank">Teams</a>
        <a href="https://portal.hz.nl/" target="_blank">HZ Portal</a>
        <a href="https://github.com/" target="_blank">Github</a>
    </div>
</nav>
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
</body>
</html>
