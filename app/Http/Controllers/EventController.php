<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('events.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required'
        ]);

        Event::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'location' => $request->location,
            'event_date' => $request->event_date,
            'price' => $request->price,
        ]);

        return redirect('/')->with('success', 'Event berhasil ditambahkan');
    }

    public function index(Request $request)
    {
        $query = Event::with('category');

        if ($request->category) {
            $query->where('category_id', $request->category);
        }

        $events = $query->paginate(6);
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