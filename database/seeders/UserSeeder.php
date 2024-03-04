<?php

namespace Database\Seeders;

use App\Models\Credential;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)
            //->hasCredentials(1)
            ->create();
//        ->each(function ($user){
//            $credential = Credential::inRandomOrder()->first();
//            $user->credentials()->attach($credential);
//        });
    }
}
