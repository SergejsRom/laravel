<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

  

    protected $fillable = ['country_id', 'hotel_id', 'status', 'user_id', 'check_in', 'check_out'];

    public function getHotel()
    {
        return $this->belongsTo('App\Models\Hotel');
    }
    public function getUser()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function getCountry()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
