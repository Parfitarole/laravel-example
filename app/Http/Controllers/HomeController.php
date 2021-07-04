<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
