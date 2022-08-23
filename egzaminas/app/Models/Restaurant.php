<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['restaurant_name', 'code', 'address'];
    public function menu() 
    {
        return $this->hasMany('App\Models\Menu');

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
