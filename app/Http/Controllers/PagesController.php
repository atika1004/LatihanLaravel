<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('index');
    }

    // public function about($slug) {
        // return view('about', compact('slug'));
    // }

    public function about() {
        return view('about', ['namaku' => 'Atika Istiqomah']);
    }
}
