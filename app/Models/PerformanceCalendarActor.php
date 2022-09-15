<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerformanceCalendarActor extends Model
{
    protected $fillable = [
        'performance_calendar_id',
        'actor_id'
    ];

    public function actors()
    {
        return $this->hasMany('App\Models\PerformanceCalendarActor', 'performance_calendar_id', 'id');
    }
}
