<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home(Request $request) {
        $page = $request->input('page', 'home');
        return view('home', compact('page'));
    }
}
