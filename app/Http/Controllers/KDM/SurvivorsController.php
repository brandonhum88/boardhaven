<?php

namespace App\Http\Controllers\KDM;

use App\KDM\Survivor;
use App\KDM\Settlement;
use App\Http\Controllers\Controller;

class SurvivorsController extends Controller
{
    public function store()
    {
        $survivor = request()->validate([
            'name' => 'required'
        ]);

        Survivor::Create($survivor);
    }

    public function departingIndex(Settlement $settlement)
    {
        return $settlement -> survivors;
    }
}
