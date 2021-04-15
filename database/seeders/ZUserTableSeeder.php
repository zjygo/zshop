<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_user')->delete();
        
        \DB::table('z_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'user123',
                'password' => '$2a$10$lTu9qi0hr19OC800Db.eludFr0AXuJUSrMHi/iPYhKRlPFeqJxlye',
                'gender' => 1,
                'birthday' => NULL,
                'last_login_time' => '2019-04-20 22:17:43',
                'last_login_ip' => '0:0:0:0:0:0:0:1',
                'user_level' => 0,
                'nickname' => 'user123',
                'mobile' => '',
                'avatar' => '',
                'weixin_openid' => '',
                'session_key' => '',
                'status' => 0,
                'add_time' => '2019-04-20 22:17:43',
                'update_time' => '2019-04-20 22:17:43',
                'deleted' => 0,
            ),
        ));
        
        
    }
}