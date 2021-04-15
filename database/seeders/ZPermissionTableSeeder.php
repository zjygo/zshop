<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZPermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_permission')->delete();
        
        \DB::table('z_permission')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'permission' => '*',
                'add_time' => '2019-01-01 00:00:00',
                'update_time' => '2019-01-01 00:00:00',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'permission' => 'admin:category:read',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'permission' => 'admin:category:update',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'permission' => 'admin:category:delete',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'permission' => 'admin:category:create',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 2,
                'permission' => 'admin:category:list',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 2,
                'permission' => 'admin:brand:create',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 2,
                'permission' => 'admin:brand:list',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 2,
                'permission' => 'admin:brand:delete',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 2,
                'permission' => 'admin:brand:read',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 2,
                'permission' => 'admin:brand:update',
                'add_time' => '2019-01-07 15:18:53',
                'update_time' => '2019-01-07 15:18:53',
                'deleted' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 3,
                'permission' => 'admin:ad:list',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 3,
                'permission' => 'admin:ad:delete',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'role_id' => 3,
                'permission' => 'admin:ad:create',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'role_id' => 3,
                'permission' => 'admin:ad:update',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'role_id' => 3,
                'permission' => 'admin:ad:read',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'role_id' => 3,
                'permission' => 'admin:groupon:list',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'role_id' => 3,
                'permission' => 'admin:groupon:update',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'role_id' => 3,
                'permission' => 'admin:groupon:create',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'role_id' => 3,
                'permission' => 'admin:groupon:read',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'role_id' => 3,
                'permission' => 'admin:groupon:delete',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'role_id' => 3,
                'permission' => 'admin:topic:create',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'role_id' => 3,
                'permission' => 'admin:topic:read',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'role_id' => 3,
                'permission' => 'admin:topic:list',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'role_id' => 3,
                'permission' => 'admin:topic:delete',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'role_id' => 3,
                'permission' => 'admin:topic:update',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'role_id' => 3,
                'permission' => 'admin:coupon:list',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'role_id' => 3,
                'permission' => 'admin:coupon:delete',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'role_id' => 3,
                'permission' => 'admin:coupon:read',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'role_id' => 3,
                'permission' => 'admin:coupon:create',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'role_id' => 3,
                'permission' => 'admin:coupon:update',
                'add_time' => '2019-01-07 15:18:57',
                'update_time' => '2019-01-07 15:18:57',
                'deleted' => 0,
            ),
        ));
        
        
    }
}