<?php

namespace App\Http\Controllers\KDM;

use App\Http\Controllers\Controller;
use App\Http\Requests\KDMGearRequest;

class KDMGearController extends Controller
{
    public function store(KDMGearRequest $request)
    {
        $request->persist();
    }
}
