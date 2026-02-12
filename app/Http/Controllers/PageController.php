<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function kvkk()
    {
        return view('pages.kvkk');
    }

    public function terms()
    {
        return view('pages.terms');
    }
}
