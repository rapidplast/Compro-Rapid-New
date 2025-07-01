<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class carrierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('carrier')->insert([
            [
                'jenis' => 'Programmer',
                'penempatan' => 'Jawa Barat',
                'jobdesk' => 'Mengembangkan aplikasi berbasis web dan membuat sebuah project besar',
                'kualifikasi' => json_encode([
                    'Memiliki pengalaman dengan Laravel',
                    'Penguasaan ReactJS',
                    'Mampu bekerja dalam tim',
                    'Komunikasi yang baik'
                ]),
                'foto' => 'foto_default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis' => 'UI/UX Desain',
                'penempatan' => 'Bali',
                'jobdesk' => 'Mendesain antarmuka pengguna seminimalis mungkin dan enak di lihat oleh user',
                'kualifikasi' => json_encode([
                    'Ahli dalam UI/UX',
                    'Pengalaman dengan Adobe XD',
                    'Kreatif dan inovatif',
                    'Detail-oriented'
                ]),
                'foto' => 'foto_default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
