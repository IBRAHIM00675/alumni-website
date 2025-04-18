<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
        'event_date',
        'location',
        'event_time',
        'rsvp_required',

    ];

    /**
     * Define the relationship: An event belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

}
