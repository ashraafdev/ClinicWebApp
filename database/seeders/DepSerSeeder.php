<?php

namespace Database\Seeders;

use App\Models\DepSer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepSerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DepSer::create([
            'name' => 'Service Test',
        ]);
    }
}
