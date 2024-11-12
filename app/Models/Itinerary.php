<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    protected $fillable = ['name', 'start_date', 'end_date', 'destination', 'accommodation', 'transport'];

}