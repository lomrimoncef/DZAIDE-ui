<?php

use Illuminate\Database\Seeder;


class UrgencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('urgences')->insert([
            [
            'libele'=>'Extrême urgence',
            'nbr_jr'=>'7' 

        ],
        [
            'libele'=>'Très Urgent',
            'nbr_jr'=>'15' 

        ],[
            'libele'=>'Urgent',
            'nbr_jr'=>'30' 

        ],[
            'libele'=>'Normal',
            'nbr_jr'=>'60' 

        ]
        ]);
        
    }
}
