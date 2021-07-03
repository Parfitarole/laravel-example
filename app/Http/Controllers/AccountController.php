<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $account = Accounts::where('id', '=', session('AccountId'))->first();

        return view('account.index')->with('account', $account);
    }

    public function logIn()
    {
        return view('account.log-in');
    }

    public function logInAction(Request $request)
    {
        // Validate request
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $account = Accounts::where('email', '=', $request->email)->first();

        if ($account ) {
            if (Hash::check($request->password, $account->password)) {
                $request->session()->put('AccountId', $account->id);
                return redirect('/feed');
            } else {
                return back()->with('Error', 'Incorrect password');
            }
        } else {
            return back()->with('Error', 'Account does not exist');
        }

        return redirect('/');
    }

    public function logOutAction()
    {
        if (session()->has('AccountId')) {
            session()->pull('AccountId');
        }

        return redirect('/');
    }

    public function signUp()
    {
        return view('account.sign-up');
    }

    public function signUpAction(Request $request)
    {
        // Validate request
        $request->validate([
            'email'      => 'required|email|unique:accounts',
            'username'   => 'required|unique:accounts',
            'password_1' => 'required',
            'password_2' => 'required',
        ]);

        if ($request->password_1 === $request->password_2) {
            $password = $request->password_1;
        } else {
            return back()->with('Error', 'Passwords do not match');
        };

        $account = new Accounts;

        $account->email    = $request->email;
        $account->username = $request->username;
        $account->password = Hash::make($password);

        $save = $account->save();

        $account = Accounts::where('email', '=', $account->email)->first();

        if ($save) {
            $request->session()->put('AccountId', $account->id);
            return redirect('/feed');
        } else {
            return back()->with('Error', 'Failed to save to database');
        }
    }
}
