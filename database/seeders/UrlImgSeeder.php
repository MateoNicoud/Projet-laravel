<?php

namespace Database\Seeders;

use App\Models\UrlImg;
use App\Models\User;
use http\Url;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrlImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UrlImg::factory(10)->create();
    }
}
