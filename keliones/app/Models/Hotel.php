<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'hotel_name', 'price', 'duration'];
    public function country() 
    {
        return $this->belongsTo('App\Models\Country');
    }
}
