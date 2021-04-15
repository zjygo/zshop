<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZSystemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_system')->delete();
        
        \DB::table('z_system')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key_name' => 'litemall_order_unpaid',
                'key_value' => '30',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'key_name' => 'litemall_wx_index_new',
                'key_value' => '6',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'key_name' => 'litemall_mall_latitude',
                'key_value' => '31.201900',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'key_name' => 'litemall_order_unconfirm',
                'key_value' => '7',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'key_name' => 'litemall_wx_share',
                'key_value' => 'false',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'key_name' => 'litemall_express_freight_min',
                'key_value' => '88',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'key_name' => 'litemall_mall_name',
                'key_value' => 'litemall',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'key_name' => 'litemall_express_freight_value',
                'key_value' => '8',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'key_name' => 'litemall_mall_qq',
                'key_value' => '705144434',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'key_name' => 'litemall_wx_index_hot',
                'key_value' => '6',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'key_name' => 'litemall_order_comment',
                'key_value' => '7',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'key_name' => 'litemall_wx_catlog_goods',
                'key_value' => '4',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'key_name' => 'litemall_mall_longitude',
                'key_value' => '121.587839',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'key_name' => 'litemall_mall_phone',
                'key_value' => '021-xxxx-xxxx',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'key_name' => 'litemall_wx_catlog_list',
                'key_value' => '4',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'key_name' => 'litemall_mall_address',
                'key_value' => '上海',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'key_name' => 'litemall_wx_index_brand',
                'key_value' => '4',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'key_name' => 'litemall_wx_index_topic',
                'key_value' => '4',
                'add_time' => '2019-12-08 19:11:18',
                'update_time' => '2019-12-08 19:11:18',
                'deleted' => 0,
            ),
        ));
        
        
    }
}