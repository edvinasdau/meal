<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dish;

class Dish extends Model
{
   protected $fillable = ['title', 'price'];
}
