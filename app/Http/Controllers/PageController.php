<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $query = Event::query();

        // 🔥 FILTER KATEGORI
        if ($request->category && $request->category != 'all') {
            $query->where('category_id', $request->category);
        }

        $events = $query->latest()->get();

        return view('home', compact('events'));
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
        $events = Event::latest()->get();
        return view('eventmanage', compact('events'));
    }

    public function detail($id)
    {
        $event = Event::findOrFail($id);
        return view('detail', compact('event'));
    }

    public function dashboard()
    {
        $totalEvent = Event::count();
        return view('dashboard', compact('totalEvent'));
    }

    public function checkout()
    {
        return view('checkout');
    }
}