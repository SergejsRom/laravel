<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'hotel_id', 'status', 'user_id', 'check_in', 'check_out'];

    const STATUSES = [
        1 => 'New',
        2 => 'Confirmed',
        3 => 'Canceled',
    ];

    public function hotels()
    {
        return $this->belongsTo('App\Models\Hotel');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function countries()
    {
        return $this->belongsTo('App\Models\Country');
    }

}
