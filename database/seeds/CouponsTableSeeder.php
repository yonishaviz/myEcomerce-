<?php

use Illuminate\Database\Seeder;
use App\Coupons;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupons::create([
            'code' => 'ABC123',
            'type' => 'fixed',
            'value' => 30,
        ]);
        
        Coupons::create([
            'code' => 'DE321',
            'type' => 'present',
            'present_off' => 50,
        ]);
        
    }
}
