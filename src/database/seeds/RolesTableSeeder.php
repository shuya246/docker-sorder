<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            ['role_name' => '管理者',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
            ],
            [
             'role_name' => '東京営業所',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
            ],
            [
             'role_name' => '名古屋営業所',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
            ],
            [
             'role_name' => '大阪営業所',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
            ],
            [
             'role_name' => '一般',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()
            ]
        ]);
    }
}
