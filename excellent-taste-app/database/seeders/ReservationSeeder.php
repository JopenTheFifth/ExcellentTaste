<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create(['from' => now(), 'to' => now()->addHours(2), 'user_id' => 1, 'table_number' => 2]);
    }
}
