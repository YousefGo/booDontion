<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class userPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
            [
        
        'user_id'=>1,
         'post_types_id'=>1,
         'title'=>'Java Progammering',
          'description'=>'java progamming book for computer since department level 1 ',
          'image'=>'dummy',
          'courseName'=>'java',
           'courseCode'=>'1402535-4', 
            'contactWay'=>'whatsapp', 
            'contactLink'=>'96612345678',
            'postStatus'=>0
            ],

          [
            'user_id'=>1,
            'post_types_id'=>1,
            'title'=>'PHP Progammering',
             'description'=>'PHP progamming book for computer since department level 1 ',
             'image'=>'dummy',
             'courseName'=>'PHp',
              'courseCode'=>'140140-4', 
               'contactWay'=>'whatsapp', 
               'contactLink'=>'96612345678',
               'postStatus'=>0
               ],

        ];
        DB::table('posts')->insert($posts);
    }
}
