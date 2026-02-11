<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function about()
    {
        return view('corporate.about');
    }

    public function values()
    {
        return view('corporate.values');
    }

    public function vision()
    {
        return view('corporate.vision');
    }

    public function regions()
    {
        return view('corporate.regions');
    }

    public function documents()
    {
        return view('corporate.documents');
    }
}
