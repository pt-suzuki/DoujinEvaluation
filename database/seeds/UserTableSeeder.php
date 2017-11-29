<?php

use Illuminate\Database\Seeder;
use \DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
        		'name' => '鈴木拓也',
        		'code' => '123456',
        		'twitterurl'=> ''
        ];
        DB::table('users')->insert($param);
    }
}
