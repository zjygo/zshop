<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_role')->delete();
        
        \DB::table('z_role')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '超级管理员',
                'desc' => '所有模块的权限',
                'enabled' => 1,
                'add_time' => '2019-01-01 00:00:00',
                'update_time' => '2019-01-01 00:00:00',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '商场管理员',
                'desc' => '只有商场模块的操作权限',
                'enabled' => 1,
                'add_time' => '2019-01-01 00:00:00',
                'update_time' => '2019-01-07 15:15:12',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '推广管理员',
                'desc' => '只有推广模块的操作权限',
                'enabled' => 1,
                'add_time' => '2019-01-01 00:00:00',
                'update_time' => '2019-01-07 15:15:24',
                'deleted' => 0,
            ),
        ));
        
        
    }
}