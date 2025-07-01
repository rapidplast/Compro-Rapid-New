<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class inovation extends Seeder
{
    public function run(): void
    {
        DB::table('inovation')->insert([
            [
                'kategory' => 'Pharmacy',
                'judul' => 'King Rosmeri',
                'foto' => 'King',
                'keterangan' => 'King sang raja PUBG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategory' => 'Pharmacy',
                'judul' => 'King Rizky',
                'foto' => 'King',
                'keterangan' => 'King sang raja dan jago di semua hal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
