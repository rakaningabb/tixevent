<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::with('category');

        // filter kategori
        if ($request->category) {
            $query->where('category_id', $request->category);
        }

        // pagination
        $events = $query->paginate(6);

        // ambil kategori
        $categories = Category::all();

        return view('home', compact('events', 'categories'));
    }

    public function show($slug)
    {
        $event = Event::with('category')
            ->where('slug', $slug)
            ->orWhere('event_id', $slug)
            ->firstOrFail();

        return view('events.show', compact('event'));
    }
}