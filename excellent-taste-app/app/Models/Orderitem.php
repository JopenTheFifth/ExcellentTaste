<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function item(){
        return $this->belongsTo(Item::class, 'item_id');
    }
}
