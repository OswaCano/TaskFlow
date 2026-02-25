<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'group_id',
    ];

    // Always a calendar belongs to owner user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // maybe this calendar belongs to a group or not
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    // calendar has many event
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    // When there is a group we need to know every user in the group order by their role
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('role')
            ->withTimestamps();
    }
}

