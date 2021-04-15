<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZCouponTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_coupon')->delete();
        
        \DB::table('z_coupon')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '限时满减券',
                'desc' => '全场通用',
                'tag' => '无限制',
                'total' => 0,
                'discount' => '5.00',
                'min' => '99.00',
                'limit' => 1,
                'type' => 0,
                'status' => 0,
                'goods_type' => 0,
                'goods_value' => '[]',
                'code' => NULL,
                'time_type' => 0,
                'days' => 10,
                'start_time' => NULL,
                'end_time' => NULL,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '限时满减券',
                'desc' => '全场通用',
                'tag' => '无限制',
                'total' => 0,
                'discount' => '10.00',
                'min' => '99.00',
                'limit' => 1,
                'type' => 0,
                'status' => 0,
                'goods_type' => 0,
                'goods_value' => '[]',
                'code' => NULL,
                'time_type' => 0,
                'days' => 10,
                'start_time' => NULL,
                'end_time' => NULL,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '新用户优惠券',
                'desc' => '全场通用',
                'tag' => '无限制',
                'total' => 0,
                'discount' => '10.00',
                'min' => '99.00',
                'limit' => 1,
                'type' => 1,
                'status' => 0,
                'goods_type' => 0,
                'goods_value' => '[]',
                'code' => NULL,
                'time_type' => 0,
                'days' => 10,
                'start_time' => NULL,
                'end_time' => NULL,
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => '可兑换优惠券',
                'desc' => '全场通用',
                'tag' => '仅兑换领券',
                'total' => 0,
                'discount' => '15.00',
                'min' => '99.00',
                'limit' => 1,
                'type' => 2,
                'status' => 0,
                'goods_type' => 0,
                'goods_value' => '[]',
                'code' => 'DC6FF8SE',
                'time_type' => 0,
                'days' => 7,
                'start_time' => NULL,
                'end_time' => NULL,
                'add_time' => '2018-12-23 09:29:57',
                'update_time' => '2018-12-23 09:29:57',
                'deleted' => 0,
            ),
        ));
        
        
    }
}