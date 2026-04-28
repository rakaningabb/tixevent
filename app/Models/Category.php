<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Category extends Model
{
    protected $primaryKey = 'category_id';

    public function events()
    {
        return $this->hasMany(Event::class, 'category_id', 'category_id');
    }
}