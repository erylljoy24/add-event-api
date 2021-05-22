<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name', 
        'start_date',
        'end_date',
        'days_selected'
    ];
    protected $casts = ['days_selected' => 'array'];
}
