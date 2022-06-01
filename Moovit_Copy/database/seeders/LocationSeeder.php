<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
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
        \DB::table('locations')->truncate();

        //Membuat 3 user secara manual
            \DB::table('locations')->insert([      
                [
                    'nama'=> "Universitas Sumatera Utara",
                    'peran' => "Universitas",
                    'namajalan' => "Jl. Dr. Mansyur",
                    'namakota' => "Medan",
                    'lokasi' => 'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1119810132714!2d98.6541536137908!3d3.5616813514736467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fe03ed8450b%3A0xe84941c195268efc!2sUniversity%20of%20Sumatera%20Utara!5e0!3m2!1sen!2sid!4v1654056659272!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama' =>"SMA Negeri 3 Medan",
                    'peran'=> "School",
                    'namajalan' => "Jl. Budi Kemasyarakatan",
                    'namakota' => "Medan",
                    'lokasi'=> 'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.8526710609885!2d98.6698308137908!3d3.6211285510819566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031321d4ebd52d5%3A0xb576f65d7877a7f1!2sSMA%20Negeri%203%20Medan!5e0!3m2!1sen!2sid!4v1654056921134!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama' =>"Transmart Carrefour",
                    'peran'=> "Supermarket",
                    'namajalan' => "Jl. Gatot Subroto",
                    'namakota' => "Medan",
                    'lokasi' => 'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9796327974364!2d98.65923351234193!3d3.59214514416111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031319fad674f3f%3A0x9a4d9826cd2634ea!2sTransmart%20Carrefour%20Medan%20Fair!5e0!3m2!1sen!2sid!4v1654056986716!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama' => "Universitas Sari Mutiara Indonesia (USMI)",
                    'peran'=> "Universitas",
                    'namajalan'=>"Jl.Kapten Muslim No.79",
                    'namakota'=>"Medan",
                    'lokasi'=>'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9543026250058!2d98.64085101379078!3d3.5979462512353857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e12431a5f53%3A0x35cc47a3fad4100f!2sUniversitas%20Sari%20Mutiara%20Medan!5e0!3m2!1sen!2sid!4v1654057410424!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama'=> "Mie Bambu 1",
                    'peran'=> "Restaurant",
                    'namajalan'=>"Jl. Sutomo Ujung No.90",
                    'namakota'=> "Medan",
                    'lokasi'=>'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9185355135537!2d98.67775271379084!3d3.6061217511813775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131ec8f5a0c0d%3A0x93314770c329ea42!2sMie%20Bambu%201!5e0!3m2!1sen!2sid!4v1654057746128!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama'=> "Restoran Sederhana",
                    'peran'=> "Restaurant",
                    'namajalan'=> 'Jl. Kapten Pattimura',
                    'namakota'=> 'Medan',
                    'lokasi'=>'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15928.082128788546!2d98.64880771111244!3d3.5827585768328483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313029b4904f93%3A0x773716f6ee3553!2sRestoran%20Sederhana!5e0!3m2!1sen!2sid!4v1654057987431!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama'=>"Universitas Methodist Indonesia",
                    'peran'=>"Universitas",
                    'namajalan'=>'Jalan Hang Tuah No.8',
                    'namakota'=>"Medan",
                    'lokasi'=>'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.038307764226!2d98.66855211379077!3d3.5786713513622805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131d2ca9e8e4f%3A0x8f9e1923eea126ac!2sIndonesian%20Methodist%20University!5e0!3m2!1sen!2sid!4v1654064837701!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama'=>"Sun Plaza",
                    'peran'=>'Shopping Mall',
                    'namajalan'=>'Jl. KH Zainul Arifin',
                    'namakota'=>'Medan',
                    'lokasi'=>'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0237986625107!2d98.66917981379083!3d3.5820078513403613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cd6e10abb5%3A0xf4a6500e549d1a82!2sSun%20Plaza!5e0!3m2!1sen!2sid!4v1654065209098!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama'=>"SMA Negeri 4 Medan",
                    'peran'=>'School',
                    'namajalan'=>'Jl. Gelas No.12',
                    'namakota'=>'Medan',
                    'lokasi'=>'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9580419891095!2d98.65304001379077!3d3.597090451241027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e21627c33e3%3A0x1d02831ac3938001!2sSMA%20Negeri%204%20Medan!5e0!3m2!1sen!2sid!4v1654071114120!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ],
                [
                    'nama'=>"Stadion Teladan",
                    'peran'=>"Stadium",
                    'namajalan'=>'West Teladan',
                    'namakota'=>'Medan',
                    'lokasi'=>'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5796.548660742615!2d98.69371050775075!3d3.565712461867936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031305c871e2f09%3A0xb4c92b13ab4bcb8e!2sTeladan%20Stadium!5e0!3m2!1sen!2sid!4v1654071880451!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
                ]
            ]);
    }
}
