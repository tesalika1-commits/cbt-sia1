<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Peta nama Subject (harus sudah dibuat SubjectSeeder) ke nama file
     * data di database/data/.
     */
    private const DATA_MAP = [
        'PKN' => 'pkn',
        'B. Inggris' => 'b_inggris',
        'Science' => 'science',
    ];

    public function run(): void
    {
        foreach (self::DATA_MAP as $subjectName => $fileName) {
            $subject = Subject::where('name', $subjectName)->first();

            if (! $subject) {
                $this->command?->warn("Subject '{$subjectName}' belum ada, jalankan SubjectSeeder dulu.");

                continue;
            }

            /** @var array<int, array{payload: string, score?: int, description?: string|null, options: array<int, array{text: string, is_correct: bool}>}> $questions */
            $questions = require database_path("data/{$fileName}.php");

            foreach ($questions as $item) {
                $this->storeQuestion($subject, $item);
            }
        }
    }

    /**
     * 1 baris data dari file di database/data/ diubah jadi:
     *  - 1 Question, dibuat lewat Question::factory()->for($subject)->create()
     *  - N Answer,   dibuat lewat relasi $question->answers()->createMany()
     *
     * Urutan 'options' di-shuffle() dulu sebelum disimpan, supaya posisi
     * jawaban benar tidak selalu berada di urutan yang sama setiap kali
     * seeder ini dijalankan ulang — itulah bagian "random"-nya.
     */
    private function storeQuestion(Subject $subject, array $item): void
    {
        $question = Question::factory()
            ->for($subject)
            ->create([
                'payload' => $item['payload'],
                'score' => $item['score'] ?? 1,
                'description' => $item['description'] ?? null,
                'is_active' => true,
            ]);

        $options = $item['options'];
        shuffle($options);

        $question->answers()->createMany(
            array_map(fn (array $option, int $index) => [
                // huruf opsi: 0->A, 1->B, 2->C, 3->D, dst — mengikuti
                // urutan $options yang SUDAH diacak di atas
                'option' => chr(65 + $index),
                'text' => $option['text'],
                'is_correct' => $option['is_correct'],
                'is_active' => true,
            ], $options, array_keys($options))
        );
    }
}