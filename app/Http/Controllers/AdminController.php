<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    public function dashboard()
    {
        // 🔥 hitung total event
        $totalEvents = Event::count();

        // 🔥 kirim ke view
        return view('admin.dashboard', compact('totalEvents'));
    }
}