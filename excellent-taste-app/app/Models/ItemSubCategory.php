<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSubCategory extends Model
{
    use HasFactory;


    public function items(){
        return $this->hasMany(Item::class);
    }

    public function item_category(){
        return $this->belongsTo(item_categories::class);
    }
}
