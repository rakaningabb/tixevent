<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Review;
use App\Models\User;
use App\Models\EventImage;
use App\Models\Ticket;

class Event extends Model
{
    protected $primaryKey = 'event_id';

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
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(EventImage::class, 'event_id', 'event_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'event_id', 'event_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'event_id', 'event_id');
    }
}