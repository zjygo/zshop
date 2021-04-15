<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZFootprintTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_footprint')->delete();
        
        \DB::table('z_footprint')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'goods_id' => 1109008,
                'add_time' => '2019-12-08 19:12:05',
                'update_time' => '2019-12-08 19:12:05',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'goods_id' => 1110016,
                'add_time' => '2019-12-08 19:13:42',
                'update_time' => '2019-12-08 19:13:42',
                'deleted' => 0,
            ),
        ));
        
        
    }
}