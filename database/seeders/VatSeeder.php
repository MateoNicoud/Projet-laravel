<?php

namespace Database\Seeders;

use App\Models\Vat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vat::factory(1)->create(['vat'=>(2.1)]);
        Vat::factory(1)->create(['vat'=>(5.5)]);
        Vat::factory(1)->create(['vat'=>(10)]);
        Vat::factory(1)->create(['vat'=>(20)]);
    }

}
