<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id' ,'soup', 'side', 'main', 'salad'];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

        public function soups()
    {
        return $this->hasMany(Soup::class);
    }

        public function sideDishes()
    {
        return $this->hasMany(SideDish::class);
    }

        public function salads()
    {
        return $this->hasMany(Salad::class);
    }

        public function mainDishes()
    {
        return $this->hasMany(MainDish::class);
    }
}
