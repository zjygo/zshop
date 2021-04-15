<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZIssueTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_issue')->delete();
        
        \DB::table('z_issue')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => '购买运费如何收取？',
                'answer' => '单笔订单金额（不含运费）满88元免邮费；不满88元，每单收取10元运费。
(港澳台地区需满',
                    'add_time' => '2018-02-01 00:00:00',
                    'update_time' => '2018-02-01 00:00:00',
                    'deleted' => 0,
                ),
                1 => 
                array (
                    'id' => 2,
                    'question' => '使用什么快递发货？',
                    'answer' => '严选默认使用顺丰快递发货（个别商品使用其他快递），配送范围覆盖全国大部分地区（港澳台地区除',
                    'add_time' => '2018-02-01 00:00:00',
                    'update_time' => '2018-02-01 00:00:00',
                    'deleted' => 0,
                ),
                2 => 
                array (
                    'id' => 3,
                    'question' => '如何申请退货？',
                    'answer' => '1.自收到商品之日起30日内，顾客可申请无忧退货，退款将原路返还，不同的银行处理时间不同，',
                    'add_time' => '2018-02-01 00:00:00',
                    'update_time' => '2018-02-01 00:00:00',
                    'deleted' => 0,
                ),
                3 => 
                array (
                    'id' => 4,
                    'question' => '如何开具发票？',
                    'answer' => '1.如需开具普通发票，请在下单时选择“我要开发票”并填写相关信息（APP仅限2.4.0及以',
                    'add_time' => '2018-02-01 00:00:00',
                    'update_time' => '2018-02-01 00:00:00',
                    'deleted' => 0,
                ),
            ));
        
        
    }
}