<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create(['item_name' => 'beer', 'price' => 3.25, 'sub_category_shorthand' => 'cd']);
        Item::create(['item_name' => 'coffee', 'price' => 2.25, 'sub_category_shorthand' => 'wd']);
        Item::create(['item_name' => 'cheese', 'price' => 1.75, 'sub_category_shorthand' => 'sn']);
        Item::create(['item_name' => 'Chicken_nuggets', 'price' => 4.75, 'sub_category_shorthand' => 'ws']);
    }
}
