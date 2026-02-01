<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class VisiMisiController extends Controller
{
    public function index()
    {
        return view('public.programs');
    }
}
