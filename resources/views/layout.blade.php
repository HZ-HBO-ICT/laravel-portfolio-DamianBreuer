<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Damian Breuer</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ Request::path() === 'profile' ? 'active' : '' }}"><a href="profile">Profile</a></li>
            <li class="{{ Request::path() === 'blog' ? 'active' : '' }}"><a href="blog">Blog</a></li>
            <li class="{{ Request::path() === 'faq' ? 'active' : '' }}"><a href="faq">FAQ</a></li>
            <li class="{{ Request::path() === 'dashboard' ? 'active' : '' }}"><a href="dashboard">Dashboard</a></li>
            <li class="{{ Request::path() === 'contact' ? 'active' : '' }}" style="float:right"><a href="contact">Contact</a></li>
        </ul>
        <div class="sidebar">
            <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">HZ Onderwijs en Examenregelingen</a>
            <a href="https://learn.hz.nl/my/" target="_blank">HZ Learn</a>
            <a href="https://www.microsoft.com/nl-nl/microsoft-teams/log-in" target="_blank">Teams</a>
            <a href="https://portal.hz.nl/" target="_blank">HZ Portal</a>
            <a href="https://github.com/" target="_blank">Github</a>
        </div>
    </nav>

    @yield('content')
</body>
</html>
