<?php

namespace App\Repositories;

use App\Event;

class Events
{
    public function all()
    {
        return Event::latest()
                ->filterByDate(request(['month', 'year']))
                ->get();
    }
}
