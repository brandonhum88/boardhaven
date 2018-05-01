@extends('layouts.master')

@section ('content')
    <h1>{{ $event -> name }}</h1>

    @foreach($event->comments as $comment)
        <strong>{{ $comment->created_at->diffForHumans() }}</strong> <article>{{ $comment->body }}</article>
    @endforeach

    <div class="container" style="padding: 40px 0;">
        <event-comment-create-form
            event_id="{{ $event -> id }}"
        ></event-comment-create-form>

        @include ('partials.errors')
    </div>
@endsection
