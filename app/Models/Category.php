<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'category_id';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'category_id', 'category_id');
    }
}