<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home')->insert([
            [
            'title' => 'PESONA KEINDAHAN BROMO',
            'content' => 'Gunung Bromo merupakan sebuah gunung berapi aktif di Jawa Timur, Indonesia.',
            'image' => '/img/home-01.jpg'
        ],
        [
            'title' => 'Kata Bromo berasal',
            'content' => 'Bahasa Sansekerta yaitu Brahma (salah seorang Dewa Utama dalam agama Hindu) ataupun dalam Bahasa Tengger dieja “Brama”.',
            'image' => '/img/home-02.jpg'
        ],
        [
            'title' => 'Destinasi Wisata Bromo',
            'content' => 'Banyak destinasi yang bisa dikunjungi saat berwisata ke Gunung Bromo, seperti Penanjakan 1 dimana para pengunjungnya bisa menikmati beberapa puncak gunung yang dikelilingi lembah-lembah berkabut, dan merupakan spot terbaik untuk melihat matahari terbit karena lokasinya yang tinggi.',
            'image' => '/img/home-03.jpg'
        ],
        [
            'title' => 'Kawah Bromo',
            'content' => ' kawah gunung berapi dari dekat, karena lokasinya yang jauh dari parkir mobil kalian bisa memilih menunggang kuda sambil menikmati hembusan udara sejuk. ',
            'image' => '/img/home-04.jpg'
        ],
        [
            'title' => ' Desa Ngadas',
            'content' => 'desa yang masuk dalam wilayah kecamatan Poncokusumo dan menjadi pemukiman Suku Tengger.',
            'image' => '/img/home-05.jpg'
        ]
        ])
    }
}