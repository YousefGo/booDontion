<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $postsType=[
            [
        
                'name'=>'donate'
            ],
            [
        
                'name'=>'request'
            ],

        ];
        DB::table('post_types')->insert($postsType);
    }
}
