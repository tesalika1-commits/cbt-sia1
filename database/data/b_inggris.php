<?php

/**
 * 150 English questions: synonyms, antonyms, and vocabulary (English-Indonesian).
 *
 * Setiap elemen merepresentasikan 1 soal:
 * - payload     : isi/teks soal
 * - score       : bobot soal
 * - description : catatan tambahan soal (boleh null)
 * - options     : daftar pilihan jawaban (2 untuk Benar/Salah, 4 untuk
 *                 pilihan ganda), masing-masing punya 'text' dan 'is_correct'.
 *                 QuestionSeeder akan mengacak urutan opsi ini sebelum
 *                 disimpan, jadi tidak perlu diacak manual di sini.
 *
 * File ini murni data (return array) — dibaca oleh QuestionSeeder,
 * tidak ada logika di sini.
 */

return [
    [
        'payload' => 'The synonym of the word "Happy" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Begin', 'is_correct' => false],
            ['text' => 'Look', 'is_correct' => false],
            ['text' => 'Glad', 'is_correct' => true],
            ['text' => 'Scared', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Glad" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Talk', 'is_correct' => false],
            ['text' => 'Complete', 'is_correct' => false],
            ['text' => 'Scared', 'is_correct' => false],
            ['text' => 'Happy', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Big" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Smart', 'is_correct' => false],
            ['text' => 'Complete', 'is_correct' => false],
            ['text' => 'Large', 'is_correct' => true],
            ['text' => 'Intelligent', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Large" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Big', 'is_correct' => true],
            ['text' => 'Show', 'is_correct' => false],
            ['text' => 'Display', 'is_correct' => false],
            ['text' => 'Start', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Small" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Quick', 'is_correct' => false],
            ['text' => 'Scared', 'is_correct' => false],
            ['text' => 'Smart', 'is_correct' => false],
            ['text' => 'Tiny', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Tiny" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Beautiful', 'is_correct' => false],
            ['text' => 'Small', 'is_correct' => true],
            ['text' => 'Poor', 'is_correct' => false],
            ['text' => 'Fast', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Fast" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Display', 'is_correct' => false],
            ['text' => 'Simple', 'is_correct' => false],
            ['text' => 'Purchase', 'is_correct' => false],
            ['text' => 'Quick', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Quick" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Big', 'is_correct' => false],
            ['text' => 'Fast', 'is_correct' => true],
            ['text' => 'Brave', 'is_correct' => false],
            ['text' => 'Speak', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Slow" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Scared', 'is_correct' => false],
            ['text' => 'Sluggish', 'is_correct' => true],
            ['text' => 'Old', 'is_correct' => false],
            ['text' => 'Help', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Sluggish" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Show', 'is_correct' => false],
            ['text' => 'Pretty', 'is_correct' => false],
            ['text' => 'Help', 'is_correct' => false],
            ['text' => 'Slow', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Beautiful" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Pretty', 'is_correct' => true],
            ['text' => 'Buy', 'is_correct' => false],
            ['text' => 'Show', 'is_correct' => false],
            ['text' => 'Happy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Pretty" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Beautiful', 'is_correct' => true],
            ['text' => 'Large', 'is_correct' => false],
            ['text' => 'Big', 'is_correct' => false],
            ['text' => 'Small', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Smart" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Intelligent', 'is_correct' => true],
            ['text' => 'Speak', 'is_correct' => false],
            ['text' => 'Angry', 'is_correct' => false],
            ['text' => 'Smart', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Intelligent" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Smart', 'is_correct' => true],
            ['text' => 'Begin', 'is_correct' => false],
            ['text' => 'Glad', 'is_correct' => false],
            ['text' => 'Needy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Sad" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Unhappy', 'is_correct' => true],
            ['text' => 'Talk', 'is_correct' => false],
            ['text' => 'Smart', 'is_correct' => false],
            ['text' => 'Scared', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Unhappy" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Unhappy', 'is_correct' => false],
            ['text' => 'Display', 'is_correct' => false],
            ['text' => 'Sad', 'is_correct' => true],
            ['text' => 'Buy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Angry" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Happy', 'is_correct' => false],
            ['text' => 'Furious', 'is_correct' => true],
            ['text' => 'Finish', 'is_correct' => false],
            ['text' => 'Wealthy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Furious" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Assist', 'is_correct' => false],
            ['text' => 'Angry', 'is_correct' => true],
            ['text' => 'Begin', 'is_correct' => false],
            ['text' => 'Tiny', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Rich" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Wealthy', 'is_correct' => true],
            ['text' => 'Courageous', 'is_correct' => false],
            ['text' => 'Furious', 'is_correct' => false],
            ['text' => 'Help', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Wealthy" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hard', 'is_correct' => false],
            ['text' => 'Rich', 'is_correct' => true],
            ['text' => 'Tiny', 'is_correct' => false],
            ['text' => 'Look', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Poor" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Needy', 'is_correct' => true],
            ['text' => 'Angry', 'is_correct' => false],
            ['text' => 'Ancient', 'is_correct' => false],
            ['text' => 'Poor', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Needy" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Complete', 'is_correct' => false],
            ['text' => 'Sad', 'is_correct' => false],
            ['text' => 'Rich', 'is_correct' => false],
            ['text' => 'Poor', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Strong" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Watch', 'is_correct' => false],
            ['text' => 'Small', 'is_correct' => false],
            ['text' => 'Glad', 'is_correct' => false],
            ['text' => 'Powerful', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Powerful" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Fast', 'is_correct' => false],
            ['text' => 'Brave', 'is_correct' => false],
            ['text' => 'Rich', 'is_correct' => false],
            ['text' => 'Strong', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Weak" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Glad', 'is_correct' => false],
            ['text' => 'Small', 'is_correct' => false],
            ['text' => 'Feeble', 'is_correct' => true],
            ['text' => 'Weak', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Feeble" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Easy', 'is_correct' => false],
            ['text' => 'Intelligent', 'is_correct' => false],
            ['text' => 'Weak', 'is_correct' => true],
            ['text' => 'Happy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Brave" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Courageous', 'is_correct' => true],
            ['text' => 'Start', 'is_correct' => false],
            ['text' => 'Large', 'is_correct' => false],
            ['text' => 'Intelligent', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Courageous" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Weak', 'is_correct' => false],
            ['text' => 'Feeble', 'is_correct' => false],
            ['text' => 'Brave', 'is_correct' => true],
            ['text' => 'Hard', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Afraid" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Brave', 'is_correct' => false],
            ['text' => 'Watch', 'is_correct' => false],
            ['text' => 'Small', 'is_correct' => false],
            ['text' => 'Scared', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Scared" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Display', 'is_correct' => false],
            ['text' => 'Easy', 'is_correct' => false],
            ['text' => 'Afraid', 'is_correct' => true],
            ['text' => 'Smart', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Begin" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Start', 'is_correct' => true],
            ['text' => 'Tiny', 'is_correct' => false],
            ['text' => 'Furious', 'is_correct' => false],
            ['text' => 'Needy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Start" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Happy', 'is_correct' => false],
            ['text' => 'Needy', 'is_correct' => false],
            ['text' => 'Wealthy', 'is_correct' => false],
            ['text' => 'Begin', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Finish" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Complete', 'is_correct' => true],
            ['text' => 'Brave', 'is_correct' => false],
            ['text' => 'Ancient', 'is_correct' => false],
            ['text' => 'Quick', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Complete" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Unhappy', 'is_correct' => false],
            ['text' => 'Finish', 'is_correct' => true],
            ['text' => 'Hard', 'is_correct' => false],
            ['text' => 'Slow', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Buy" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Large', 'is_correct' => false],
            ['text' => 'Fast', 'is_correct' => false],
            ['text' => 'Happy', 'is_correct' => false],
            ['text' => 'Purchase', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Purchase" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Start', 'is_correct' => false],
            ['text' => 'Pretty', 'is_correct' => false],
            ['text' => 'Buy', 'is_correct' => true],
            ['text' => 'Scared', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Look" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Purchase', 'is_correct' => false],
            ['text' => 'Easy', 'is_correct' => false],
            ['text' => 'Watch', 'is_correct' => true],
            ['text' => 'Smart', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Watch" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Look', 'is_correct' => true],
            ['text' => 'Smart', 'is_correct' => false],
            ['text' => 'Finish', 'is_correct' => false],
            ['text' => 'Afraid', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Talk" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Slow', 'is_correct' => false],
            ['text' => 'Difficult', 'is_correct' => false],
            ['text' => 'Brave', 'is_correct' => false],
            ['text' => 'Speak', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Speak" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Weak', 'is_correct' => false],
            ['text' => 'Quick', 'is_correct' => false],
            ['text' => 'Talk', 'is_correct' => true],
            ['text' => 'Help', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Show" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Brave', 'is_correct' => false],
            ['text' => 'Feeble', 'is_correct' => false],
            ['text' => 'Intelligent', 'is_correct' => false],
            ['text' => 'Display', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Display" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Watch', 'is_correct' => false],
            ['text' => 'Show', 'is_correct' => true],
            ['text' => 'Happy', 'is_correct' => false],
            ['text' => 'Furious', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Help" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Wealthy', 'is_correct' => false],
            ['text' => 'Assist', 'is_correct' => true],
            ['text' => 'Intelligent', 'is_correct' => false],
            ['text' => 'Glad', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Assist" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Talk', 'is_correct' => false],
            ['text' => 'Pretty', 'is_correct' => false],
            ['text' => 'Help', 'is_correct' => true],
            ['text' => 'Feeble', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Easy" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Display', 'is_correct' => false],
            ['text' => 'Look', 'is_correct' => false],
            ['text' => 'Simple', 'is_correct' => true],
            ['text' => 'Fast', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Simple" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Big', 'is_correct' => false],
            ['text' => 'Sluggish', 'is_correct' => false],
            ['text' => 'Intelligent', 'is_correct' => false],
            ['text' => 'Easy', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Hard" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Difficult', 'is_correct' => true],
            ['text' => 'Angry', 'is_correct' => false],
            ['text' => 'Afraid', 'is_correct' => false],
            ['text' => 'Happy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Difficult" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hard', 'is_correct' => true],
            ['text' => 'Needy', 'is_correct' => false],
            ['text' => 'Speak', 'is_correct' => false],
            ['text' => 'Rich', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Old" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Weak', 'is_correct' => false],
            ['text' => 'Tiny', 'is_correct' => false],
            ['text' => 'Ancient', 'is_correct' => true],
            ['text' => 'Small', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Ancient" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Intelligent', 'is_correct' => false],
            ['text' => 'Show', 'is_correct' => false],
            ['text' => 'Old', 'is_correct' => true],
            ['text' => 'Watch', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Big" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Rich', 'is_correct' => false],
            ['text' => 'Small', 'is_correct' => true],
            ['text' => 'High', 'is_correct' => false],
            ['text' => 'Big', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Small" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Close', 'is_correct' => false],
            ['text' => 'High', 'is_correct' => false],
            ['text' => 'Bright', 'is_correct' => false],
            ['text' => 'Big', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Fast" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Cold', 'is_correct' => false],
            ['text' => 'Slow', 'is_correct' => true],
            ['text' => 'Old', 'is_correct' => false],
            ['text' => 'Dry', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Slow" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Cold', 'is_correct' => false],
            ['text' => 'Late', 'is_correct' => false],
            ['text' => 'Dry', 'is_correct' => false],
            ['text' => 'Fast', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Hot" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Happy', 'is_correct' => false],
            ['text' => 'Cold', 'is_correct' => true],
            ['text' => 'Wide', 'is_correct' => false],
            ['text' => 'Dim', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Cold" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Strong', 'is_correct' => false],
            ['text' => 'Hot', 'is_correct' => true],
            ['text' => 'Cold', 'is_correct' => false],
            ['text' => 'Low', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Happy" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Rich', 'is_correct' => false],
            ['text' => 'Sad', 'is_correct' => true],
            ['text' => 'High', 'is_correct' => false],
            ['text' => 'Late', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Sad" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Rich', 'is_correct' => false],
            ['text' => 'Sad', 'is_correct' => false],
            ['text' => 'Happy', 'is_correct' => true],
            ['text' => 'Easy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Rich" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Cold', 'is_correct' => false],
            ['text' => 'Poor', 'is_correct' => true],
            ['text' => 'Easy', 'is_correct' => false],
            ['text' => 'Low', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Poor" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Rich', 'is_correct' => true],
            ['text' => 'Full', 'is_correct' => false],
            ['text' => 'Wet', 'is_correct' => false],
            ['text' => 'Happy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Strong" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Narrow', 'is_correct' => false],
            ['text' => 'Dim', 'is_correct' => false],
            ['text' => 'Weak', 'is_correct' => true],
            ['text' => 'Old', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Weak" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Fast', 'is_correct' => false],
            ['text' => 'Open', 'is_correct' => false],
            ['text' => 'High', 'is_correct' => false],
            ['text' => 'Strong', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Bright" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Small', 'is_correct' => false],
            ['text' => 'Dim', 'is_correct' => true],
            ['text' => 'Slow', 'is_correct' => false],
            ['text' => 'New', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Dim" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sad', 'is_correct' => false],
            ['text' => 'Bright', 'is_correct' => true],
            ['text' => 'Rich', 'is_correct' => false],
            ['text' => 'Easy', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Open" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bright', 'is_correct' => false],
            ['text' => 'Empty', 'is_correct' => false],
            ['text' => 'Rich', 'is_correct' => false],
            ['text' => 'Close', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Close" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Late', 'is_correct' => false],
            ['text' => 'Narrow', 'is_correct' => false],
            ['text' => 'Dim', 'is_correct' => false],
            ['text' => 'Open', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Old" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'High', 'is_correct' => false],
            ['text' => 'New', 'is_correct' => true],
            ['text' => 'Poor', 'is_correct' => false],
            ['text' => 'Close', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "New" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'New', 'is_correct' => false],
            ['text' => 'Cold', 'is_correct' => false],
            ['text' => 'Easy', 'is_correct' => false],
            ['text' => 'Old', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Wet" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hot', 'is_correct' => false],
            ['text' => 'Sad', 'is_correct' => false],
            ['text' => 'Fast', 'is_correct' => false],
            ['text' => 'Dry', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Dry" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'New', 'is_correct' => false],
            ['text' => 'Wet', 'is_correct' => true],
            ['text' => 'Close', 'is_correct' => false],
            ['text' => 'Low', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "High" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Fast', 'is_correct' => false],
            ['text' => 'Low', 'is_correct' => true],
            ['text' => 'Dry', 'is_correct' => false],
            ['text' => 'Wide', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Low" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Happy', 'is_correct' => false],
            ['text' => 'Easy', 'is_correct' => false],
            ['text' => 'High', 'is_correct' => true],
            ['text' => 'Rich', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Full" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Fast', 'is_correct' => false],
            ['text' => 'Rich', 'is_correct' => false],
            ['text' => 'Empty', 'is_correct' => true],
            ['text' => 'Big', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Empty" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Dim', 'is_correct' => false],
            ['text' => 'Full', 'is_correct' => true],
            ['text' => 'Sad', 'is_correct' => false],
            ['text' => 'Open', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Easy" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Cold', 'is_correct' => false],
            ['text' => 'Poor', 'is_correct' => false],
            ['text' => 'Small', 'is_correct' => false],
            ['text' => 'Difficult', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Difficult" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Weak', 'is_correct' => false],
            ['text' => 'Wet', 'is_correct' => false],
            ['text' => 'Old', 'is_correct' => false],
            ['text' => 'Easy', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Early" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Late', 'is_correct' => true],
            ['text' => 'Fast', 'is_correct' => false],
            ['text' => 'Hot', 'is_correct' => false],
            ['text' => 'Weak', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Late" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Early', 'is_correct' => true],
            ['text' => 'Narrow', 'is_correct' => false],
            ['text' => 'Open', 'is_correct' => false],
            ['text' => 'Hot', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Wide" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Empty', 'is_correct' => false],
            ['text' => 'Narrow', 'is_correct' => true],
            ['text' => 'Low', 'is_correct' => false],
            ['text' => 'Strong', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Narrow" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Wide', 'is_correct' => true],
            ['text' => 'Full', 'is_correct' => false],
            ['text' => 'Wet', 'is_correct' => false],
            ['text' => 'Old', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Book" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Buku', 'is_correct' => true],
            ['text' => 'Meja', 'is_correct' => false],
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Air', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Table" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Teman', 'is_correct' => false],
            ['text' => 'Hewan', 'is_correct' => false],
            ['text' => 'Meja', 'is_correct' => true],
            ['text' => 'Sekolah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Chair" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Buku', 'is_correct' => false],
            ['text' => 'Meja', 'is_correct' => false],
            ['text' => 'Kursi', 'is_correct' => true],
            ['text' => 'Jendela', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Window" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Jendela', 'is_correct' => true],
            ['text' => 'Hewan', 'is_correct' => false],
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Teman', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Door" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Pintu', 'is_correct' => true],
            ['text' => 'Keluarga', 'is_correct' => false],
            ['text' => 'Air', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Water" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Makanan', 'is_correct' => false],
            ['text' => 'Sekolah', 'is_correct' => false],
            ['text' => 'Air', 'is_correct' => true],
            ['text' => 'Kursi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Fire" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Keluarga', 'is_correct' => false],
            ['text' => 'Pintu', 'is_correct' => false],
            ['text' => 'Api', 'is_correct' => true],
            ['text' => 'Meja', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Sun" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hewan', 'is_correct' => false],
            ['text' => 'Matahari', 'is_correct' => true],
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Sekolah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Moon" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bulan', 'is_correct' => true],
            ['text' => 'Buku', 'is_correct' => false],
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Murid', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Star" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bintang', 'is_correct' => true],
            ['text' => 'Buku', 'is_correct' => false],
            ['text' => 'Hewan', 'is_correct' => false],
            ['text' => 'Guru', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Friend" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Teman', 'is_correct' => true],
            ['text' => 'Buku', 'is_correct' => false],
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Guru', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Family" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Jendela', 'is_correct' => false],
            ['text' => 'Gunung', 'is_correct' => false],
            ['text' => 'Keluarga', 'is_correct' => true],
            ['text' => 'Kursi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "School" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sekolah', 'is_correct' => true],
            ['text' => 'Murid', 'is_correct' => false],
            ['text' => 'Bulan', 'is_correct' => false],
            ['text' => 'Teman', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Teacher" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Guru', 'is_correct' => true],
            ['text' => 'Sekolah', 'is_correct' => false],
            ['text' => 'Makanan', 'is_correct' => false],
            ['text' => 'Sungai', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Student" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sungai', 'is_correct' => false],
            ['text' => 'Murid', 'is_correct' => true],
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Makanan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Food" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Buku', 'is_correct' => false],
            ['text' => 'Pohon', 'is_correct' => false],
            ['text' => 'Gunung', 'is_correct' => false],
            ['text' => 'Makanan', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Animal" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Hewan', 'is_correct' => true],
            ['text' => 'Makanan', 'is_correct' => false],
            ['text' => 'Bintang', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Tree" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Jendela', 'is_correct' => false],
            ['text' => 'Buku', 'is_correct' => false],
            ['text' => 'Matahari', 'is_correct' => false],
            ['text' => 'Pohon', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "River" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sungai', 'is_correct' => true],
            ['text' => 'Bulan', 'is_correct' => false],
            ['text' => 'Makanan', 'is_correct' => false],
            ['text' => 'Gunung', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Mountain" is?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Buku', 'is_correct' => false],
            ['text' => 'Bintang', 'is_correct' => false],
            ['text' => 'Gunung', 'is_correct' => true],
            ['text' => 'Keluarga', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Tiny" is Small. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Hard" is Difficult. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Display" is Show. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Look" is Easy. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Unhappy" is Buy. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Sad" is Talk. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Wet" is Hot. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Slow" is Fast. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Moon" is Bulan. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Sluggish" is Help. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Easy" is Simple. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Intelligent" is Smart. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Easy" is Difficult. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Feeble" is Intelligent. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "School" is Teman. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Angry" is Furious. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Glad" is Happy. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Chair" is Buku. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Brave" is Courageous. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Sad" is Sad. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Finish" is Complete. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Small" is Big. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Table" is Hewan. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "New" is Old. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Small" is Smart. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Dry" is Low. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Big" is Big. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "High" is Wide. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Full" is Empty. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Early" is Late. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Close" is Open. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Watch" is Afraid. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Help" is Assist. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Slow" is Sluggish. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Simple" is Easy. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Large" is Start. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Student" is Makanan. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Window" is Jendela. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Weak" is Weak. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Difficult" is Easy. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Wide" is Narrow. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Strong" is Powerful. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Water" is Air. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => true],
            ['text' => 'False', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Smart" is Angry. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The Indonesian meaning of the word "Food" is Makanan. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Rich" is Poor. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => false],
            ['text' => 'True', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Big" is Smart. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Begin" is Needy. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'True', 'is_correct' => false],
            ['text' => 'False', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'The synonym of the word "Fast" is Purchase. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'The antonym (opposite) of the word "Poor" is Full. (True or False?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'False', 'is_correct' => true],
            ['text' => 'True', 'is_correct' => false],
        ],
    ],
];