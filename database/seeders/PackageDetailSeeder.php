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
            'point_name' => '1 User',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_name' => '1 Department /Service (Manage multiple teams or departments)',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_name' => '10 Licenses',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_name' => 'Basic Reporting',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_name' => 'Direct Reports Sharing',
            'status' => 0,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_name' => 'Monthly Status Report',
            'status' => 0,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_name' => 'Email Support',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 1,
            'point_name' => 'On-site Training & Consultation',
            'status' => 0,
        ]);
        //----------------------------------------------- Free Package -------------------------------------//

        //----------------------------------------------- Plus Package -------------------------------------//
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => '1 User',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => '50GB Storage',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => '10 Department /Service (Manage multiple teams or departments)',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => '10 Licenses',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => 'Advance Reporting',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => 'Direct Report Sharing',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => 'Monthly Status Report', 
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => 'Email & Phone Support',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 2,
            'point_name' => 'On-site Training & Consultation',
            'status' => 0,
        ]);
        //----------------------------------------------- Plus Package -------------------------------------//

        //----------------------------------------------- Pro Package -------------------------------------//
        PackageDetail::create([
            'package_id' => 3,
            'point_name' => '1 User',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_name' => '100 Department /Service (Manage multiple teams or departments)',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
            'point_name' => '1000 Licenses',
            'status' => 1,
        ]);
        PackageDetail::create([
            'package_id' => 3,
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
