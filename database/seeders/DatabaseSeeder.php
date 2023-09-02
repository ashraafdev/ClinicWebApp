<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $admin = User::create([
            'name' => 'Achraf Hebboul',
            'email' => 'achraf@clinic.com',
            'password' => Hash::make('123456789'),
            'cin' => 'xx123456',
            'phone' => '0601020304',
            'address' => 'Agadir Souss-Massa',
            'gender' => 'Male',
            'bornDate' => date('Y-m-d', strtotime('2003-06-01')),
            'recrutingDate' => date('Y-m-d'),
            'typeEmploi' => 'Administrator',
        ]);

        $admin->assignRole('Administrator');
    }
}
