<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZCartTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_cart')->delete();
        
        
        
    }
}