<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;



class PasslockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('passlocks')->insert([
        //     "website" => Str::random(5),
        //     "email" => Str::random(5)."@gmail.com",
        //     "password" => Crypt::encrypt(Str::random(8)),
        // ]);

        for ($i=0; $i < 99; $i++) { 
            DB::table('passlocks')->insert([
               'website' => Str::random(5),
               'email' => Str::random(5)."@gmail.com",
               'password'=> Crypt::encrypt(Str::random(8)),
               
           ]);
       }
    }
}
