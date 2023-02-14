<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PackageDetail;

class PackageDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //----------------------------------------------- Free Package -------------------------------------//
        PackageDetail::create([
            'package_id' => 1,
            'point_value'=> 1,
            'point_name' => 'User',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_value'=> 1,
            'point_name' => 'Department /Service (Manage multiple teams or departments)',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_value'=> 10,
            'point_name' => 'Licenses',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_value'=> null,
            'point_name' => 'Basic Reporting',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_value'=> null,
            'point_name' => 'Direct Reports Sharing',
            'status' => 0,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_value'=> null,
            'point_name' => 'Monthly Status Report',
            'status' => 0,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_value'=> null,
            'point_name' => 'Email Support',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_value'=> null,
            'point_name' => 'On-site Training & Consultation',
            'status' => 0,
        ]);
        //----------------------------------------------- Free Package -------------------------------------//

        //----------------------------------------------- Plus Package -------------------------------------//
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> 1,
            'point_name' => 'User',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> 50,
            'point_name' => 'GB Storage',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> 10,
            'point_name' => 'Department /Service (Manage multiple teams or departments)',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> 100,
            'point_name' => 'Licenses',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> null,
            'point_name' => 'Advance Reporting',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> null,
            'point_name' => 'Direct Report Sharing',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> null,
            'point_name' => 'Monthly Status Report', 
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> null,
            'point_name' => 'Email & Phone Support',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_value'=> null,
            'point_name' => 'On-site Training & Consultation',
            'status' => 0,
        ]);
        //----------------------------------------------- Plus Package -------------------------------------//

        //----------------------------------------------- Pro Package -------------------------------------//
        PackageDetail::create([
            'package_id' => 3,
            'point_value'=> 1,
            'point_name' => 'User',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_value'=> 100,
            'point_name' => 'Department /Service (Manage multiple teams or departments)',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_value'=> 1000,
            'point_name' => 'Licenses',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_value'=> null,
            'point_name' => 'Advance Reporting',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_name' => 'Direct Reports Sharing Projects',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_name' => 'Monthly Status Report',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_name' => 'Email Support Free Subdomains',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_name' => 'On-site Training & Consultation',
            'status' => 1,
        ]);
        //----------------------------------------------- Pro Package -------------------------------------//

    }
}
