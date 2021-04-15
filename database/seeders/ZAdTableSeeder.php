<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZAdTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_ad')->delete();
        
        \DB::table('z_ad')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '合作 谁是你的菜',
                'link' => '',
                'url' => 'http://yanxuan.nosdn.127.net/65091eebc48899298171c2eb6696fe27.jpg',
                'position' => 1,
                'content' => '合作 谁是你的菜',
                'start_time' => NULL,
                'end_time' => NULL,
                'enabled' => 1,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '活动 美食节',
                'link' => '',
                'url' => 'http://yanxuan.nosdn.127.net/bff2e49136fcef1fd829f5036e07f116.jpg',
                'position' => 1,
                'content' => '活动 美食节',
                'start_time' => NULL,
                'end_time' => NULL,
                'enabled' => 1,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '活动 母亲节',
                'link' => '',
                'url' => 'http://yanxuan.nosdn.127.net/8e50c65fda145e6dd1bf4fb7ee0fcecc.jpg',
                'position' => 1,
                'content' => '活动 母亲节5',
                'start_time' => NULL,
                'end_time' => NULL,
                'enabled' => 1,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
        ));
        
        
    }
}