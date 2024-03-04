<?php

namespace Database\Seeders;

use App\Models\Credential;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Credential::factory(1)->create([
            'type_permission'=>('admin')
        ]);
        Credential::factory(1)->create([
            'type_permission'=>('client')
        ]);
    }
}
