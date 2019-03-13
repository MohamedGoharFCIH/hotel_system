<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $table="reservations";

    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
