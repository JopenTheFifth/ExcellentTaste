<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];


    public function order(){
        return $this->hasOne(Order::class);
    }

    public function table(){
        return $this->belongsTo(Table::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
