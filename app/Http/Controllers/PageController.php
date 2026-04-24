<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function history()
    {
        return view('history');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function usermanage()
    {
        return view('usermanage');
    }
    public function eventmanage()
    {
        return view('eventmanage');
    }
    public function detail()
    {
        return view('detail');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
