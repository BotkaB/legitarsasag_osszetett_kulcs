<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{

    protected  $primaryKey = 'travel_id';
    protected $fillable = [
        'name',
        'country',
       
    ];
    /** @use HasFactory<\Database\Factories\AirlineFactory> */
    use HasFactory;
}
