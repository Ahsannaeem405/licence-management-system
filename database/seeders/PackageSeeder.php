<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;
class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'name' => 'Free',
            'price' => '0',
        ]);
        Package::create([
            'name' => 'Plus',
            'price' => '9',
        ]);
        Package::create([
            'name' => 'Pro',
            'price' => '49',

        ]);
    }
}
