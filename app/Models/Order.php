<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','address','time'];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function meal_orders()
    {
        return $this->hasMany(MealOrder::class,'order_id');
    }
}