<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $account = Accounts::where('id', '=', session('AccountId'))->first();

        return view('user.index')->with('account', $account);
    }

    public function feed()
    {
        $account = Accounts::where('id', '=', session('AccountId'))->first();

        return view('user.feed')->with('account', $account);
    }

    public function post($id)
    {
        $account = Accounts::where('id', '=', session('AccountId'))->first();

        return view('user.post');
    }

    public function postAction()
    {
        $account = Accounts::where('id', '=', session('AccountId'))->first();

        return redirect('/');
    }

    public function deletePostAction()
    {
        return redirect('/');
    }

    public function commentAction()
    {
        return redirect('/');
    }

    public function deleteCommentAction()
    {
        return redirect('/');
    }

    public function messages()
    {
        $account = Accounts::where('id', '=', session('AccountId'))->first();

        return view('user.messages')->with('account', $account);
    }

    public function sendMessageAction()
    {
        return redirect('/');
    }

    public function deleteMessageAction()
    {
        return redirect('/');
    }
}
