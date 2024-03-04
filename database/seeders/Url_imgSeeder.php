<?php

namespace Database\Seeders;

use App\Models\Url_img;
use App\Models\User;
use http\Url;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Url_imgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Url_img::factory(10)->create();
    }
}
