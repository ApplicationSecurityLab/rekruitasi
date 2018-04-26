<?php

use Illuminate\Database\Seeder;

class AssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assistants')->insert([
            'name' => "Gendhis Azzukhruf",
            'divisi' => 'GIS',
            'jurusan' => 'T. Telekomunikasi',
            'photo' => 'gendhis.jpg'
        ]);
        DB::table('assistants')->insert([
            'name' => "Derry Revy",
            'divisi' => 'VOIP',
            'jurusan' => 'T. Telekomunikasi',
            'photo' => 'derry.jpg'
        ]);
        DB::table('assistants')->insert([
            'name' => "Faishal Azhiman",
            'divisi' => 'WEB',
            'jurusan' => 'T. Telekomunikasi',
            'photo' => 'faishal.jpg'
        ]);
        DB::table('assistants')->insert([
            'name' => "Agnnia Shahibah",
            'divisi' => 'IDS',
            'jurusan' => 'T. Telekomunikasi',
            'photo' => 'agnnia.jpg'
        ]);
        DB::table('assistants')->insert([
            'name' => "Ghifary Aldo",
            'divisi' => 'GIS',
            'jurusan' => 'T. Telekomunikasi',
            'photo' => 'ghifary.jpg'
        ]);
        DB::table('assistants')->insert([
            'name' => "Putra Yusifin",
            'divisi' => 'VOIP',
            'jurusan' => 'T. Elektro',
            'photo' => 'putra.jpg'
        ]);

    }
}
