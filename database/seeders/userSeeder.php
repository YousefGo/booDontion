<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users=[
            [
        
                'name'=>'Yousef',
                'unveristyName'=>'UQU',
                'facility'=>'CS',
                'numberOfBookDonation'=>'0', 
                'point'=>'0', 
                'email'=>'test@gmail.com', 
                'email_verified_at'=>now(),
                'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
                'remember_token'=> Str::random(10),
           
            ],

        ];
        DB::table('users')->insert($users);
    }
}
