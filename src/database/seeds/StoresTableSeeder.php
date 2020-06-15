<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stores')->insert([
            'store_num' => 1,
            'store_name' => '東京テスト支店'
        ]);
    }
}
