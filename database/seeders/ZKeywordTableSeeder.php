<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZKeywordTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_keyword')->delete();
        
        \DB::table('z_keyword')->insert(array (
            0 => 
            array (
                'id' => 1,
                'keyword' => '母亲节',
                'url' => '',
                'is_hot' => 0,
                'is_default' => 0,
                'sort_order' => 100,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'keyword' => '日式',
                'url' => '',
                'is_hot' => 0,
                'is_default' => 0,
                'sort_order' => 100,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'keyword' => '夏凉被',
                'url' => '',
                'is_hot' => 0,
                'is_default' => 0,
                'sort_order' => 100,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'keyword' => '新品上市',
                'url' => '',
                'is_hot' => 0,
                'is_default' => 0,
                'sort_order' => 100,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'keyword' => '墨镜',
                'url' => '',
                'is_hot' => 0,
                'is_default' => 0,
                'sort_order' => 5,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'keyword' => '520元礼包抢先领',
                'url' => '',
                'is_hot' => 1,
                'is_default' => 1,
                'sort_order' => 1,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'keyword' => '单鞋',
                'url' => '',
                'is_hot' => 0,
                'is_default' => 0,
                'sort_order' => 8,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
        ));
        
        
    }
}