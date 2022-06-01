<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
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
        \DB::table('penggunas')->truncate();

        //Membuat 3 user secara manual
            \DB::table('penggunas')->insert([      
                [
                    'username'=> "murniws",
                    'nama'=> "Murniwati Siahaan",
                    'email' => "murniwati@gmail.com",
                    'password' => bcrypt('murniwati123'),
                ],
                [
                    'username'=> "iwan123",
                    'nama' =>"Iwan Fals",
                    'email'=> "iwan@gmail.com",
                    'password' => bcrypt("iwan123"),
                ],
                [
                    'username'=> "nadya04",
                    'nama' =>"Nadya Adha",
                    'email'=> "nadya@gmail.com",
                    'password' => bcrypt("nadya123"),
                ],
    
                [
                    'username'=> "farhan26",
                    'nama' =>"Farhan Ai",
                    'email'=> "farhan@gmail.com",
                    'password' => bcrypt("farhan123"),
                ]
            ]);
    }
}
