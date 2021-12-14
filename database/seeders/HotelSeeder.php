<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hotels')->insert([
            ["group"=>"Quản trị hệ thống", "name"=>"Nguyễn Tuấn Anh", "sex"=>"nam", "phone"=>"0332882276", "cccd"=>"123456789", "email"=>"nguyentuananh@gmail.com","address"=>"Phú Thọ"]
        ]);
    }
}
