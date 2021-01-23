<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function orderitems(){
        return $this->hasMany(Orderitem::class);
    }
}
