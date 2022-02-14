@extends ('layout')

@section('content')
<main>
    <article>
        <h1>Here are some things that are good to know about me:</h1>
        <h2>
            <details style="margin-bottom: 35px;">
                <summary>Why did I choose this study/school and what's next?</summary>
                <h5>
                    <p>This school is my second choice. I wanted to go to the <a href="https://www.buas.nl/opleidingen/bachelor-creative-media-and-game-technologies" target="_blank">BUAS</a> and study Creative Media and Game Technologies, but I didn't
                        pass the assignment.<br>
                        So now I'm here. I actually don't know what I want to do when I finish this study, so I'll
                        have to think about that for a bit.</p>
                </h5>
            </details>
            <details style="margin-bottom: 35px;">
                <summary>The personal SWOT analysis.</summary>
                <h5>Here is my SWOT analysis:</h5><img src="img/swot.png" alt="SWOT Analysis">
            </details>
            <details style="margin-bottom: 35px;">
                <summary>What is my programming experience?</summary>
                <h5>-Did I already have some programming experience?<br>
                    Yes, I did.<br>
                    -Where did I receive that experience?<br>
                    I received it at my pre-education.<br>
                    -What kind of programming did I do there?<br>
                    We worked a little bit with python, we were just making little figures by using coding. And we
                    also learned a bit<br>
                    about php, html and css.</h5>
            </details>
            <details style="margin-bottom: 35px;">
                <summary>What did I think of the feedback that was given to me?</summary>
                <h5>Overall I agreed with what they were saying. There was so much stuff that could be added to my
                    website.<br>
                    And not everything in my code looked as clear as it should be. There was also a lot that I just
                    copied and pasted.<br>
                    By doing that I had parts in my code that I didn't even understand. I didn't know what that part
                    of the code was doing.<br>
                    I should at least know what the code that I copy and paste does.</h5>
            </details>
        </h2>
        <h1>There is a bit of a discussion going on whether you should use article or section in your code.<br>
            Here are some examples:</h1>
        <h2>
            <details style="margin-bottom: 35px;">
                <summary><u>Post 1:</u></summary>
                <h5>Click the image to see the full post.</h5>
                <a href="https://stackoverflow.com/questions/7549561/section-vs-article-html5" target="_blank"><img src="img/post2.png" alt="post1"></a>
            </details>
            <details style="margin-bottom: 35px;">
                <summary><u>Post 2:</u></summary>
                <h5>Click the image to see the full post.</h5>
                <a href="https://www.geeksforgeeks.org/difference-between-article-tag-and-section-tag/" target="_blank"><img src="img/post3.png" alt="post2"></a>
            </details>
            <details style="margin-bottom: 35px;">
                <summary><u>Post 3:</u></summary>
                <h5>Click the image to see the full post.</h5>
                <a href="https://www.smashingmagazine.com/2020/01/html5-article-section/" target="_blank"><img src="img/post1.png" alt="post3" width="620" height="450"></a>
            </details>
        </h2>

        <a href="https://hz.nl/" target="_blank"><img src="img/hz.png" style="position: fixed; width: 165px; height: 45px; left: 25px; top: 695px;" alt="HZ logo"></a>
    </article>
</main>
@endsection
