<?php

namespace App\Http\Controllers;

use App\Models\Faq;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function show()
    {
        $posts = Faq::all();

        return view('faq', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('faq-form');
    }

    public function store()
    {
        $faq = new Faq();
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();
        return redirect('/faq');
    }
}
