<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $account = Accounts::where('id', '=', session('AccountId'))->first();

        return view('home.index')->with('account', $account);
    }
}
