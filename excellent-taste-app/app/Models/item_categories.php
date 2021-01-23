<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_categories extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $keyType = 'string';

    public function itemsubcategories(){
        return $this->hasMany(ItemSubCategory::class);
    }

}
