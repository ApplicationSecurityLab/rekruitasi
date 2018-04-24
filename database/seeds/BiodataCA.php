<?php

use Illuminate\Database\Seeder;

class BiodataCA extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Arif Budi",
            'email' => 'arifbudi'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'GIS',
            'jobdesk' => 'map 2D dan 3D telkom',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Muhammad Diaz",
            'email' => 'muhamaddiaz'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'WEB',
            'jobdesk' => 'FrontEnd',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Faris Hadianto",
            'email' => 'farishhadianto'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'WEB',
            'jobdesk' => 'Backend',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Nanda Purba",
            'email' => 'nanda'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'WEB',
            'jobdesk' => 'Backend',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Ramadhan Prasojoe",
            'email' => 'joe'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'Game Tech',
            'jobdesk' => 'Game Programming',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Kusvhiawan Muhammad",
            'email' => 'kusvhiawan'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'Game Tech',
            'jobdesk' => 'Game Designer',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Varenza Arivian",
            'email' => 'varenza'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'Game Tech',
            'jobdesk' => 'Game Designer',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Christian Pranata",
            'email' => 'christian'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'IDS',
            'jobdesk' => 'Kerjanya bareng sama semua',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Luqmanul Hakim",
            'email' => 'luqmanul'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'IDS',
            'jobdesk' => 'Kerjanya bareng sama semua',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Muhammad Rakha",
            'email' => 'rakha'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'IDS',
            'jobdesk' => 'Kerjanya bareng sama semua',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Valdi Harris",
            'email' => 'valdihaharris'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'VOIP',
            'jobdesk' => 'Kerjanya bareng sama semua',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Kuswindarini",
            'email' => 'kuswindarini'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'VOIP',
            'jobdesk' => 'Kerjanya bareng sama semua',
            'isAdmin' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Willy Amaluddin",
            'email' => 'willyamaluddin'.'@gmail.com',
            'password' => bcrypt('helloworld'),
            'divisi' => 'IV',
            'jobdesk' => 'Video profil fakultas, visi misi fakultas',
            'isAdmin' => 1
        ]);
    }
}
