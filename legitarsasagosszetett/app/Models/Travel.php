<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected  $primaryKey = 'travel_id';
    protected $fillable = [
        'evaluation',
        'flight_id',
        'user_id',
    ];

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('flight_id', '=', $this->getAttribute('flight_id'))
            ->where('user_id', '=', $this->getAttribute('user_id'));
        
        return $query;
    }

    /** @use HasFactory<\Database\Factories\TravelFactory> */
    use HasFactory;
}
