<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SideDish extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
