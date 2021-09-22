<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $links = auth()->user()->links;

        return view('links.index', compact('links'));
    }
}
