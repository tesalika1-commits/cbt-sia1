<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    public function definition(): array
    {
        return [
            // kalau tidak di-override lewat ->for($subject), factory akan
            // otomatis membuat Subject baru lewat SubjectFactory
            'subject_id' => Subject::factory(),
            'payload' => $this->faker->sentence(8).'?',
            'score' => 1,
            'description' => null,
            'is_active' => true,
        ];
    }
}