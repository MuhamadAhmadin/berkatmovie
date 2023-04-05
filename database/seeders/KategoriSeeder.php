<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "slug" => "now_playing",
                "nama" => "Now Playing",
            ],
            [
                "slug" => "popular",
                "nama" => "Popular",
            ],
            [
                "slug" => "top_rated",
                "nama" => "Top Rated",
            ],
            [
                "slug" => "upcoming",
                "nama" => "Upcoming",
            ],
        ];

        DB::table('kategoris')->insert($data);
    }
}
