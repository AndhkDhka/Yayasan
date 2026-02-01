<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function index()
    {
        return view('public.kontak');
    }
}
