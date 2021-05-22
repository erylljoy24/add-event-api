<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 
        'start',
        'end',
        'days_selected'
    ];
    protected $casts = ['days_selected' => 'array'];
}
