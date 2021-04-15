<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZGrouponRulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_groupon_rules')->delete();
        
        \DB::table('z_groupon_rules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'goods_id' => 1039051,
                'goods_name' => '多功能午睡枕',
                'pic_url' => 'http://yanxuan.nosdn.127.net/c8ca0600fa7ba11ca8be6a3173dd38c9.png',
                'discount' => '20',
                'discount_member' => 20,
                'expire_time' => '2019-12-31 00:00:00',
                'status' => 0,
                'add_time' => '2018-11-08 13:41:44',
                'update_time' => '2018-11-08 13:41:44',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'goods_id' => 1109008,
                'goods_name' => '云端沙发组合',
                'pic_url' => 'http://yanxuan.nosdn.127.net/c5be2604c0e4186a4e7079feeb742cee.png',
                'discount' => '50',
                'discount_member' => 5,
                'expire_time' => '2019-12-31 00:00:00',
                'status' => 0,
                'add_time' => '2018-11-08 13:42:44',
                'update_time' => '2018-11-08 13:42:44',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'goods_id' => 1110016,
                'goods_name' => '天然硅胶宠物除毛按摩刷',
                'pic_url' => 'http://yanxuan.nosdn.127.net/3bd73b7279a83d1cbb50c0e45778e6d6.png',
                'discount' => '39',
                'discount_member' => 2,
                'expire_time' => '2020-12-31 00:00:00',
                'status' => 0,
                'add_time' => '2019-12-08 19:13:25',
                'update_time' => '2019-12-08 19:13:25',
                'deleted' => 0,
            ),
        ));
        
        
    }
}