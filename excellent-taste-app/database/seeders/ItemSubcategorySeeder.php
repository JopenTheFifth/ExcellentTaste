<?php

namespace Database\Seeders;

use App\Models\ItemSubCategory;
use Illuminate\Database\Seeder;

class ItemSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemSubCategory::create([
            'sub_category_name' => 'warm drinks',
            'category_shorthand' => 'dr',
            'sub_category_shorthand' => 'wd'
        ]);

        ItemSubCategory::create([
            'sub_category_name' => 'cold drinks',
            'category_shorthand' => 'dr',
            'sub_category_shorthand' => 'cd'
        ]);

        ItemSubCategory::create([
            'sub_category_name' => 'cold snacks',
            'category_shorthand' => 'sn',
            'sub_category_shorthand' => 'cs'
        ]);

        ItemSubCategory::create([
            'sub_category_name' => 'warm snacks',
            'category_shorthand' => 'sn',
            'sub_category_shorthand' => 'ws'
        ]);
    }
}
