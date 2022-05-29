<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [
                'id'=> 1,
                'name' => 'Super Admin',
                'type' => 'superadmin',
                'number' => '090078601',
                'email' => 'admin@coupletuple.com',
                'img' => 'momi.jpg',
                'status' => 1,
                'address' => 'Pakistan',
                'password' => '$2a$12$KWOJORt86eq301Il56SpJeKrFw85Z1LmNVLg1MoAo9s5S7wxJ6Aeq'

            ]
        ];
        Admin::insert($adminRecords);
    }
}
