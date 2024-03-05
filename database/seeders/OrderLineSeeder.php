<?php

namespace Database\Seeders;

use App\Models\Order_line;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order_line::factory(10)->create();
    }
}
