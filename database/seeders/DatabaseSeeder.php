<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'first_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'role'=>'1',

        ]);
        
        DB::table('users')->insert([
            'first_name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456789'),
            'email_verified_at'=>date('Y-m-d H:i:s'),
            'role'=>'2',

        ]);
        DB::table('currencies')->insert([
            'name' => 'Bitcoin',

        ]);
        DB::table('currencies')->insert([
            'name' => 'Ethereum',

        ]);
        DB::table('currencies')->insert([
            'name' => 'USDT',

        ]);
        DB::table('currencies')->insert([
            'name' => 'BNB',

        ]);
        DB::table('currencies')->insert([
            'name' => 'Shiba Inu',

        ]);
        DB::table('currencies')->insert([
            'name' => 'ADA',

        ]);
         DB::table('referral_profits')->insert([
            'profit' => '20',

        ]);

        DB::table('Stats')->insert([
            'BTC' => '65',
            'BNB' => '65',
            'USDT' => '65',
            'ETH' => '56',
            'ADA' => '65',
            'SIB' => '65',

        ]);
        DB::table('Stats')->insert([
            'BTC' => '65',
            'BNB' => '65',
            'USDT' => '65',
            'ETH' => '56',
            'ADA' => '65',
            'SIB' => '65',

        ]);
        DB::table('Stats')->insert([
            'BTC' => '65',
            'BNB' => '65',
            'USDT' => '65',
            'ETH' => '56',
            'ADA' => '65',
            'SIB' => '65',

        ]);
        DB::table('Stats')->insert([
            'BTC' => '65',
            'BNB' => '65',
            'USDT' => '65',
            'ETH' => '56',
            'ADA' => '65',
            'SIB' => '65',

        ]);
        DB::table('Stats')->insert([
            'BTC' => '65',
            'BNB' => '65',
            'USDT' => '65',
            'ETH' => '56',
            'ADA' => '65',
            'SIB' => '65',

        ]);
        DB::table('Stats')->insert([
            'BTC' => '65',
            'BNB' => '65',
            'USDT' => '65',
            'ETH' => '56',
            'ADA' => '65',
            'SIB' => '65',

        ]);
        DB::table('Stats')->insert([
            'BTC' => '65',
            'BNB' => '65',
            'USDT' => '65',
            'ETH' => '56',
            'ADA' => '65',
            'SIB' => '65',

        ]);
    }
}
