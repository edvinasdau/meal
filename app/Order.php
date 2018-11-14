<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id' ,'soup', 'side', 'main', 'salad', 'price'];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

}
