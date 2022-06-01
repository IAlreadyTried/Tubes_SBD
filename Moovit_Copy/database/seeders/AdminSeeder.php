<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Kosongkan semua data di tabel users
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('admins')->truncate();

        //Membuat 3 user secara manual
            \DB::table('admins')->insert([      
                [     
                    'username'=> "abdul",
                    'password' => bcrypt('admin1'),
                ],
                [
                    'username' =>"Sabrina",
                    'password' => bcrypt("admin2"),
                ],
            ]);
    }
}
