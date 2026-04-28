<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalEvent = Event::count();

        return view('admin.dashboard', compact('totalEvent'));
    }
}