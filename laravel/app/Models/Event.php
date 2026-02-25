<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'calendar_id',
        'user_id',
        'title',
        'description',
        'start_date',
        'end_date',
        'is_all_day',
        'type',
        'status',
    ];

    protected $casts = [
      'is_all_day' => 'boolean',
      'start_date' => 'datetime',
      'end_date' => 'datetime',
    ];

    public function calendar()
    {
        return $this->belongsTo(Calendar::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'event_participants')
            ->withPivot(['role', 'response', 'responded_at'])
            ->withTimestamps();
    }
}
