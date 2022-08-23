<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'photo', 'price', 'menu_id'];
    public function menu() 
    {
        return $this->hasMany('App\Models\Menu');
    }
}
