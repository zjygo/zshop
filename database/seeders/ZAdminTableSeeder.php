<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZAdminTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_admin')->delete();
        
        \DB::table('z_admin')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin123',
                'password' => '$2a$10$.rEfyBb/GURD9P2p0fRg/OAJGloGNDkJS4lY0cQHeqDgsbdTylBpu',
                'last_login_ip' => NULL,
                'last_login_time' => NULL,
                'avatar' => 'https://wpimg.wallstcn.com/f778738c-e4f8-4870-b634-56703b4acafe.gif',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
                'role_ids' => '[1]',
            ),
            1 => 
            array (
                'id' => 4,
                'username' => 'promotion123',
                'password' => '$2a$10$wDZLOLLnzZ1EFZ3ldZ1XFOUWDEX6TnQCUFdJz4g.PoMaLTzS8TjWq',
                'last_login_ip' => '',
                'last_login_time' => NULL,
                'avatar' => 'https://wpimg.wallstcn.com/f778738c-e4f8-4870-b634-56703b4acafe.gif',
                'add_time' => '2019-01-07 15:16:59',
                'update_time' => '2019-01-07 15:17:34',
                'deleted' => 0,
                'role_ids' => '[3]',
            ),
            2 => 
            array (
                'id' => 5,
                'username' => 'mall123',
                'password' => '$2a$10$aCtsc4rG6KmxQ59.IkYse.oRyKuwQoU2CPCmxSdB.d5nXq6aw/z4O',
                'last_login_ip' => '',
                'last_login_time' => NULL,
                'avatar' => 'https://wpimg.wallstcn.com/f778738c-e4f8-4870-b634-56703b4acafe.gif',
                'add_time' => '2019-01-07 15:17:25',
                'update_time' => '2019-01-07 15:21:05',
                'deleted' => 0,
                'role_ids' => '[2]',
            ),
        ));
        
        
    }
}