<?php

use Illuminate\Database\Seeder;
use \DB;

class ThreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
        		'code' => '7890',
        		'userid' => 1,
        		'name' => '記事１',
        		'comment' => '読んでくれてありがとうございました。',
        		'accesscount'=> 0,
        		'field' => '{ "image":"/1/1/index.jpg","enquete":[{ "type":"1", "id":"1", "page":"30", "sort":"1" },{ "type":"2", "id":"2", "title":"タイトル2", "item":[ { "title":"項目１", "id":"1" } ,{ "title":"項目2", "id":"2" },{ "title":"項目3", "id":"3" } ], "sort":"2" },{ "type":"3", "id":"3", "title":"タイトル3", "item":[ { "title":"項目１", "id":"1" } ,{ "title":"項目2", "id":"2" }, { "title":"項目3", "id":"3"}],"sort":"3"}]}'
        		,'created_at' => '2017-11-26 00:00:00',
        		'updated_at' => '2017-11-26 00:00:00'
        ];
        DB::table('threads')->insert($param);
        
        $param =[
        		'code' => '7891',
        		'userid' => 1,
        		'name' => '記事2',
        		'comment' => '',
        		'accesscount'=> 0,
        		'field' => '{ "image":"/1/1/index2.jpg","enquete":[{ "type":"1", "id":"1", "page":"15", "sort":"1" },{ "type":"2", "id":"2", "title":"タイトル2", "item":[ { "title":"項目１", "id":"1" } ,{ "title":"項目2", "id":"2" },{ "title":"項目3", "id":"3" } ], "sort":"2" },{ "type":"3", "id":"3", "title":"タイトル3", "item":[ { "title":"項目１", "id":"1" } ,{ "title":"項目2", "id":"2" }, { "title":"項目3", "id":"3"}],"sort":"3"}]}'
        		,'created_at' => '2017-11-26 00:00:00',
        		'updated_at' => '2017-11-26 00:00:00'
        ];
        DB::table('threads')->insert($param);
    }
}
