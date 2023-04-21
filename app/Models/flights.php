<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    use HasFactory;
    protected $fillable = ['flight_number', 'departure_airport','destination_airport','ending_airport', 'arrival_airport', 'date', 'time'];

}
