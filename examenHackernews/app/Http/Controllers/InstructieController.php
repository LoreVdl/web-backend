<?php

namespace Hackernews\Http\Controllers;

use Illuminate\Http\Request;

class InstructieController extends Controller
{

    public function showInstructies()
    {
        return view('instructie');
    }
}
