<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_log')->delete();
        
        \DB::table('z_log')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin' => 'admin123',
                'ip' => '0:0:0:0:0:0:0:1',
                'type' => 1,
                'action' => '登录',
                'status' => 1,
                'result' => '',
                'comment' => '',
                'add_time' => '2019-12-08 19:12:40',
                'update_time' => '2019-12-08 19:12:40',
                'deleted' => 0,
            ),
        ));
        
        
    }
}