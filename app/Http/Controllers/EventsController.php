<?php

namespace App\Http\Controllers;

use App\Event;
use App\Repositories\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
        return view('events.index');
    }

    public function Show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function Create()
    {
        return view('events.create');
    }

    public function Store(Request $request)
    {
        $this -> validate(request(), [
            'name' => 'required' //confirmed -> name_confirmation
        ]);

        auth()->user()->makeEvent(
            new Event(request(['name', 'description']))
        );

        session()->flash('success_message', 'Event created!');

        return redirect('/events');
    }

    public function List(Events $event)
    {
        return $event -> all();
    }
}
