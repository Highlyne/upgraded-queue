<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Laracasts\Commander\Events\EventGenerator;

class Jobs extends Model
{
    //
    // use EventGenerator;
    protected $fillable = [
        'book_date',
        'time',
        'name',
        'barber',
        'confirmed'
    ];

}
