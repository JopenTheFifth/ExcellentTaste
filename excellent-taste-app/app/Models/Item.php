<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function orderitems(){
        return $this->hasMany(Orderitem::class);
    }

    public function itemsubcategory(){
        return $this->belongsTo(ItemSubCategory::class, 'sub_category_shorthand');
    }
}
