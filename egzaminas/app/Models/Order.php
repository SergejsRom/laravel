<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'restaurant_id', 'status', 'user_id'];

    public function getMenu()
    {
        return $this->belongsTo('App\Models\Menu');
    }
    public function getUser()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function getProduct()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function getRestaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }
}
