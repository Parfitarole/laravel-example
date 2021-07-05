<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Displays the Home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home.index');
    }
}
