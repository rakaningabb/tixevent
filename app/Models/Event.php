<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'price',
        'stock',
        'event_date',
        'location'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(EventImage::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}