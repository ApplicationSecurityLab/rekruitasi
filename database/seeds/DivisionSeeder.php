<?php

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisi')->insert([
            'nama_divisi' => 'Intrusion Detection System',
            'keterangan_divisi' => 'Pada divisi ini kita lebih terfokus kepada
            keamanan jaringan, mendeteksi adanya penyusupan dan tindakan tindakan yang 
            mencurigakan yang mengancam keamanan dari jaringan tersebut.',
            'jobdesk' => 'Membuat web server NGINX,
            Membuat dashboard monitoring di setiap servicenya yang memungkinkan diakses
            dari client side, beserta menambahkan recaptcha pada bagian register.'
        ]);
        DB::table('divisi')->insert([
            'nama_divisi' => 'Voice Over Internet Protocol',
            'keterangan_divisi' => 'Pada divisi ini kita lebih terfokus kepada bagaimana
            membangun arsitektur jaringan yang menggunakan layanan VOIP.',
            'jobdesk' => 'Membuat Fitur livechat dan juga call center pada website dengan 
            menggunakan media server.'
        ]);
        DB::table('divisi')->insert([
            'nama_divisi' => 'Web Development',
            'keterangan_divisi' => 'Pada divisi ini kita lebih terfokus kepada sebuah design
            website yang terintegrasi dengan database dan framework untuk membuat website yang dinamis',
            'jobdesk' => 'Membuat sebuah website lab yang didalamnya terdapat beberapa project dari masing
            masing divisi.'
        ]);
        DB::table('divisi')->insert([
            'nama_divisi' => 'Interactive Video',
            'keterangan_divisi' => 'Pada divisi ini kita lebih terfokus kepada membuat video dengan menggunakan
            metode yang interactive',
            'jobdesk' => 'Membuat 3 vidio profile fakultas, beserta visi misi dan juga fasilitasnya'
        ]);
        DB::table('divisi')->insert([
            'nama_divisi' => 'Game Tech',
            'keterangan_divisi' => 'Pada divisi ini kita lebih terfokus kepada bagaimana cara membuat dan mengkonsep
            suatu game dan mengintegrasikannya dengan kebutuhan dimasa mendatang.',
            'jobdesk' => 'Membuat minigame 2D.'
        ]);
        DB::table('divisi')->insert([
            'nama_divisi' => 'Geographic Information System',
            'keterangan_divisi' => 'Pada divisi ini kita lebih terfokus kepada penandaan sebuah area yang berbasis information
            system yang berbasiskan pengodean dan design.',
            'jobdesk' => 'Mapping 2D area telkom university dan mapping 3D area telkom university.'
        ]);
    }
}
