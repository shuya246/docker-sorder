<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RecieiverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reciever')->insert([
            'reciever_name' => 'おぢか屋',
            'email' => 'ojikaya@sample.com'
        ]);
    }
}
