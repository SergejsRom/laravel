<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country_name', 'season_time', 'season_end'];
    public function hotel() 
    {
        return $this->hasMany('App\Models\Hotel');

    }
    public function user() 
    {
        return $this->hasMany('App\Models\User');

    }
    public function order() 
    {
        return $this->hasMany('App\Models\Order');

    }
}
