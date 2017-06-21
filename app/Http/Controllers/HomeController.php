<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function listUser()
    {
        $users = User::all();
        $auth = auth()->user();
        return view('user.list', compact('users','auth'));
    }

    public function edit()
    {
        if( auth()->user()->isOperator() )
        {
            return 'edit user';
        }

        return 'not allow to edit';

    }
}
