@extends('layout')

@section('content')
    <main>
        <article>
            <h1>New FAQ</h1>

            <form method="POST" action="/faq" class = "faq-form">
                @csrf

                <label for="question">Question:</label><br>
                <input type="text" id="question" name="question" value="Your question"><br>
                <label for="answer">Answer:</label><br>
                <input type="text" id="answer" name="answer" value="Answer to your question"><br>
                <label for="link">Link:</label><br>
                <input type="text" id="link" name="link" value="Link that supports your question"><br>
                <input type="submit" value="Submit">
            </form>
        </article>
    </main>

@endsection
