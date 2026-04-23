<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'ticket_id',
        'code',
        'status'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}