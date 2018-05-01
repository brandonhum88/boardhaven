<?php

namespace App\Http\Controllers;

use App\Event;

class CommentsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth', ['only' => 'store']);
        // ['except' => '?']
    }

    public function store(Event $event)
    {
        $this->validate(request(), [
            'body' => 'required|min:2'
        ]);
        $event->addComment(request('body'));

        return back();
    }
}
