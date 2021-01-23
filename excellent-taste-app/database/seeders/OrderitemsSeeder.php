<?php

namespace Database\Seeders;

use App\Models\Orderitem;
use Illuminate\Database\Seeder;

class OrderitemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orderitem::create([
            'time_of_order' => now()->addMinutes(33),
            'qty' => 2,
            'order_id' => 1,
            'item_id' => 3
        ]);

        Orderitem::create([
            'time_of_order' => now()->addMinutes(33),
            'qty' => 2,
            'order_id' => 1,
            'item_id' => 1
        ]);

        Orderitem::create([
            'time_of_order' => now()->addMinutes(33),
            'qty' => 5,
            'order_id' => 1,
            'item_id' => 2
        ]);

        Orderitem::create([
            'time_of_order' => now()->addMinutes(33),
            'qty' => 1,
            'order_id' => 1,
            'item_id' => 3
        ]);
    }
}
