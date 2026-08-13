<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $subjects = [
            [
                'name' => 'PKN',
                'description' => 'Pancasila, UUD 1945, lembaga negara, hak & kewajiban warga negara, nilai kebangsaan, demokrasi & pemilu.',
            ],
            [
                'name' => 'B. Inggris',
                'description' => 'Synonyms, antonyms, and vocabulary (English-Indonesian).',
            ],
            [
                'name' => 'Science',
                'description' => 'Tata surya, klasifikasi makhluk hidup, tubuh manusia, wujud benda, energi, ekosistem, gaya & gerak.',
            ],
        ];

        foreach ($subjects as $data) {
            // dicek dulu biar seeder ini aman dijalankan ulang tanpa
            // membuat Subject duplikat (Eloquent factory sendiri tidak
            // punya firstOrCreate bawaan)
            if (Subject::where('name', $data['name'])->exists()) {
                continue;
            }

            Subject::factory()->create([
                'name' => $data['name'],
                'description' => $data['description'],
                'is_active' => true,
            ]);
        }
    }
}