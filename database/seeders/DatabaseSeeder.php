<?php

namespace Database\Seeders;

use App\Models\PackageDetail;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'superadmin',
        ]);

        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'customer',
        ]);

        $this->call([
            PackageSeeder::class,
            PackageDetail::class,
        ]);
        
    }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

