<?php

/**
 * 150 soal Science: tata surya, klasifikasi makhluk hidup, tubuh manusia, wujud benda, energi, ekosistem, gaya & gerak.
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
        'payload' => 'Planet terdekat dengan Matahari adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mars', 'is_correct' => false],
            ['text' => 'Bumi', 'is_correct' => false],
            ['text' => 'Merkurius', 'is_correct' => true],
            ['text' => 'Venus', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Planet terbesar di tata surya adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Neptunus', 'is_correct' => false],
            ['text' => 'Jupiter', 'is_correct' => true],
            ['text' => 'Saturnus', 'is_correct' => false],
            ['text' => 'Uranus', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Planet yang dikenal sebagai "Planet Merah" adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Venus', 'is_correct' => false],
            ['text' => 'Merkurius', 'is_correct' => false],
            ['text' => 'Neptunus', 'is_correct' => false],
            ['text' => 'Mars', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Planet yang memiliki cincin paling terkenal adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Jupiter', 'is_correct' => false],
            ['text' => 'Uranus', 'is_correct' => false],
            ['text' => 'Neptunus', 'is_correct' => false],
            ['text' => 'Saturnus', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Satelit alami Bumi adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Matahari', 'is_correct' => false],
            ['text' => 'Mars', 'is_correct' => false],
            ['text' => 'Venus', 'is_correct' => false],
            ['text' => 'Bulan', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pusat tata surya adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bulan', 'is_correct' => false],
            ['text' => 'Bumi', 'is_correct' => false],
            ['text' => 'Bintang', 'is_correct' => false],
            ['text' => 'Matahari', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Planet terjauh dari Matahari adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Saturnus', 'is_correct' => false],
            ['text' => 'Neptunus', 'is_correct' => true],
            ['text' => 'Uranus', 'is_correct' => false],
            ['text' => 'Pluto', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bumi berputar mengelilingi Matahari disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Orbit tetap', 'is_correct' => false],
            ['text' => 'Revolusi', 'is_correct' => true],
            ['text' => 'Rotasi', 'is_correct' => false],
            ['text' => 'Gravitasi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bumi berputar pada porosnya disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Presesi', 'is_correct' => false],
            ['text' => 'Revolusi', 'is_correct' => false],
            ['text' => 'Rotasi', 'is_correct' => true],
            ['text' => 'Orbit', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gerhana matahari terjadi ketika?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bulan berada di antara Matahari dan Bumi', 'is_correct' => true],
            ['text' => 'Bulan menjauh dari Bumi', 'is_correct' => false],
            ['text' => 'Matahari berada di antara Bumi dan Bulan', 'is_correct' => false],
            ['text' => 'Bumi berada di antara Matahari dan Bulan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gerhana bulan terjadi ketika?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bulan mendekati Matahari', 'is_correct' => false],
            ['text' => 'Bulan berada di antara Matahari dan Bumi', 'is_correct' => false],
            ['text' => 'Bumi berada di antara Matahari dan Bulan', 'is_correct' => true],
            ['text' => 'Matahari berada di antara Bumi dan Bulan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Planet yang paling dekat dengan Bumi adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Venus', 'is_correct' => true],
            ['text' => 'Jupiter', 'is_correct' => false],
            ['text' => 'Merkurius', 'is_correct' => false],
            ['text' => 'Mars', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lapisan gas yang menyelimuti Bumi disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Litosfer', 'is_correct' => false],
            ['text' => 'Atmosfer', 'is_correct' => true],
            ['text' => 'Biosfer', 'is_correct' => false],
            ['text' => 'Hidrosfer', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kumpulan bintang yang membentuk pola disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Meteor', 'is_correct' => false],
            ['text' => 'Rasi bintang', 'is_correct' => true],
            ['text' => 'Nebula', 'is_correct' => false],
            ['text' => 'Galaksi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Galaksi tempat tata surya kita berada disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Whirlpool', 'is_correct' => false],
            ['text' => 'Andromeda', 'is_correct' => false],
            ['text' => 'Triangulum', 'is_correct' => false],
            ['text' => 'Bima Sakti', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Hewan pemakan tumbuhan disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Herbivora', 'is_correct' => true],
            ['text' => 'Insektivora', 'is_correct' => false],
            ['text' => 'Omnivora', 'is_correct' => false],
            ['text' => 'Karnivora', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hewan pemakan daging disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Insektivora', 'is_correct' => false],
            ['text' => 'Omnivora', 'is_correct' => false],
            ['text' => 'Herbivora', 'is_correct' => false],
            ['text' => 'Karnivora', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Hewan pemakan segala (tumbuhan dan daging) disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Insektivora', 'is_correct' => false],
            ['text' => 'Karnivora', 'is_correct' => false],
            ['text' => 'Omnivora', 'is_correct' => true],
            ['text' => 'Herbivora', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hewan yang memiliki tulang belakang disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Avertebrata', 'is_correct' => false],
            ['text' => 'Vertebrata', 'is_correct' => true],
            ['text' => 'Arthropoda', 'is_correct' => false],
            ['text' => 'Invertebrata', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hewan yang tidak memiliki tulang belakang disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Reptilia', 'is_correct' => false],
            ['text' => 'Mamalia', 'is_correct' => false],
            ['text' => 'Invertebrata', 'is_correct' => true],
            ['text' => 'Vertebrata', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kelompok hewan yang menyusui anaknya disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mamalia', 'is_correct' => true],
            ['text' => 'Amfibi', 'is_correct' => false],
            ['text' => 'Aves', 'is_correct' => false],
            ['text' => 'Reptilia', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hewan yang hidup di dua alam (darat dan air) disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Pisces', 'is_correct' => false],
            ['text' => 'Reptilia', 'is_correct' => false],
            ['text' => 'Mamalia', 'is_correct' => false],
            ['text' => 'Amfibi', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Contoh hewan yang berkembang biak dengan bertelur adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kucing', 'is_correct' => false],
            ['text' => 'Sapi', 'is_correct' => false],
            ['text' => 'Kambing', 'is_correct' => false],
            ['text' => 'Ayam', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Contoh hewan yang berkembang biak dengan beranak adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Ikan', 'is_correct' => false],
            ['text' => 'Ayam', 'is_correct' => false],
            ['text' => 'Katak', 'is_correct' => false],
            ['text' => 'Kucing', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Proses perubahan bentuk pada kupu-kupu disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Metamorfosis', 'is_correct' => true],
            ['text' => 'Fotosintesis', 'is_correct' => false],
            ['text' => 'Respirasi', 'is_correct' => false],
            ['text' => 'Adaptasi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Tumbuhan hijau dapat membuat makanannya sendiri melalui proses?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Fotosintesis', 'is_correct' => true],
            ['text' => 'Respirasi', 'is_correct' => false],
            ['text' => 'Metamorfosis', 'is_correct' => false],
            ['text' => 'Transpirasi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bagian tumbuhan yang berfungsi menyerap air dan mineral dari tanah adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Akar', 'is_correct' => true],
            ['text' => 'Bunga', 'is_correct' => false],
            ['text' => 'Daun', 'is_correct' => false],
            ['text' => 'Batang', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bagian tumbuhan tempat terjadinya fotosintesis adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bunga', 'is_correct' => false],
            ['text' => 'Daun', 'is_correct' => true],
            ['text' => 'Akar', 'is_correct' => false],
            ['text' => 'Batang', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat perkembangbiakan pada tumbuhan berbunga adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Daun', 'is_correct' => false],
            ['text' => 'Akar', 'is_correct' => false],
            ['text' => 'Batang', 'is_correct' => false],
            ['text' => 'Bunga', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Tumbuhan yang berkembang biak dengan spora contohnya adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mangga', 'is_correct' => false],
            ['text' => 'Jagung', 'is_correct' => false],
            ['text' => 'Padi', 'is_correct' => false],
            ['text' => 'Tumbuhan paku', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Organ yang berfungsi memompa darah ke seluruh tubuh adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Jantung', 'is_correct' => true],
            ['text' => 'Ginjal', 'is_correct' => false],
            ['text' => 'Hati', 'is_correct' => false],
            ['text' => 'Paru-paru', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Organ yang berfungsi menyaring darah dan mengeluarkan urine adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Lambung', 'is_correct' => false],
            ['text' => 'Jantung', 'is_correct' => false],
            ['text' => 'Ginjal', 'is_correct' => true],
            ['text' => 'Hati', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Organ pernapasan utama manusia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hati', 'is_correct' => false],
            ['text' => 'Jantung', 'is_correct' => false],
            ['text' => 'Paru-paru', 'is_correct' => true],
            ['text' => 'Lambung', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Organ yang berfungsi mencerna makanan di dalam perut adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Usus halus', 'is_correct' => false],
            ['text' => 'Hati', 'is_correct' => false],
            ['text' => 'Ginjal', 'is_correct' => false],
            ['text' => 'Lambung', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Organ tempat penyerapan sari-sari makanan adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hati', 'is_correct' => false],
            ['text' => 'Usus halus', 'is_correct' => true],
            ['text' => 'Usus besar', 'is_correct' => false],
            ['text' => 'Lambung', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Organ yang berfungsi menyimpan sisa makanan sebelum dikeluarkan adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Usus besar', 'is_correct' => true],
            ['text' => 'Ginjal', 'is_correct' => false],
            ['text' => 'Lambung', 'is_correct' => false],
            ['text' => 'Usus halus', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Rangkaian tulang yang membentuk kerangka tubuh disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Rangka', 'is_correct' => true],
            ['text' => 'Otot', 'is_correct' => false],
            ['text' => 'Organ', 'is_correct' => false],
            ['text' => 'Sendi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat indra untuk melihat adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mata', 'is_correct' => true],
            ['text' => 'Hidung', 'is_correct' => false],
            ['text' => 'Lidah', 'is_correct' => false],
            ['text' => 'Telinga', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat indra untuk mendengar adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hidung', 'is_correct' => false],
            ['text' => 'Kulit', 'is_correct' => false],
            ['text' => 'Telinga', 'is_correct' => true],
            ['text' => 'Mata', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat indra untuk mencium bau adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mata', 'is_correct' => false],
            ['text' => 'Lidah', 'is_correct' => false],
            ['text' => 'Hidung', 'is_correct' => true],
            ['text' => 'Telinga', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat indra untuk mengecap rasa adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hidung', 'is_correct' => false],
            ['text' => 'Lidah', 'is_correct' => true],
            ['text' => 'Kulit', 'is_correct' => false],
            ['text' => 'Mata', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat indra untuk meraba disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kulit', 'is_correct' => true],
            ['text' => 'Mata', 'is_correct' => false],
            ['text' => 'Lidah', 'is_correct' => false],
            ['text' => 'Telinga', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Otak manusia terletak di dalam rongga?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Dada', 'is_correct' => false],
            ['text' => 'Perut', 'is_correct' => false],
            ['text' => 'Tengkorak', 'is_correct' => true],
            ['text' => 'Panggul', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sel darah yang berfungsi mengangkut oksigen adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Plasma darah', 'is_correct' => false],
            ['text' => 'Sel darah putih', 'is_correct' => false],
            ['text' => 'Sel darah merah', 'is_correct' => true],
            ['text' => 'Keping darah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sel darah yang berfungsi melawan kuman penyakit adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Plasma darah', 'is_correct' => false],
            ['text' => 'Sel darah merah', 'is_correct' => false],
            ['text' => 'Sel darah putih', 'is_correct' => true],
            ['text' => 'Keping darah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bagian tubuh yang berfungsi menggerakkan tulang adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kulit', 'is_correct' => false],
            ['text' => 'Darah', 'is_correct' => false],
            ['text' => 'Sendi', 'is_correct' => false],
            ['text' => 'Otot', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pertemuan antar dua tulang disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Otot', 'is_correct' => false],
            ['text' => 'Sendi', 'is_correct' => true],
            ['text' => 'Tendon', 'is_correct' => false],
            ['text' => 'Ligamen', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sistem yang berfungsi mengedarkan darah ke seluruh tubuh disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sistem pernapasan', 'is_correct' => false],
            ['text' => 'Sistem peredaran darah', 'is_correct' => true],
            ['text' => 'Sistem saraf', 'is_correct' => false],
            ['text' => 'Sistem pencernaan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sistem yang mengatur seluruh kegiatan tubuh disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sistem otot', 'is_correct' => false],
            ['text' => 'Sistem peredaran darah', 'is_correct' => false],
            ['text' => 'Sistem saraf', 'is_correct' => true],
            ['text' => 'Sistem rangka', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Zat yang dibutuhkan tubuh untuk pertumbuhan dan perbaikan sel adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Karbohidrat', 'is_correct' => false],
            ['text' => 'Lemak', 'is_correct' => false],
            ['text' => 'Vitamin', 'is_correct' => false],
            ['text' => 'Protein', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Benda yang memiliki bentuk dan volume tetap adalah wujud?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Gas', 'is_correct' => false],
            ['text' => 'Cair', 'is_correct' => false],
            ['text' => 'Padat', 'is_correct' => true],
            ['text' => 'Plasma', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Benda yang bentuknya mengikuti wadahnya tetapi volumenya tetap adalah wujud?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Cair', 'is_correct' => true],
            ['text' => 'Padat', 'is_correct' => false],
            ['text' => 'Plasma', 'is_correct' => false],
            ['text' => 'Gas', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Benda yang bentuk dan volumenya berubah-ubah mengikuti wadahnya adalah wujud?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Cair', 'is_correct' => false],
            ['text' => 'Padat', 'is_correct' => false],
            ['text' => 'Gas', 'is_correct' => true],
            ['text' => 'Plasma', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Perubahan wujud dari padat menjadi cair disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mencair', 'is_correct' => true],
            ['text' => 'Membeku', 'is_correct' => false],
            ['text' => 'Menguap', 'is_correct' => false],
            ['text' => 'Mengembun', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Perubahan wujud dari cair menjadi padat disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Membeku', 'is_correct' => true],
            ['text' => 'Menyublim', 'is_correct' => false],
            ['text' => 'Mengembun', 'is_correct' => false],
            ['text' => 'Mencair', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Perubahan wujud dari cair menjadi gas disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mengembun', 'is_correct' => false],
            ['text' => 'Menyublim', 'is_correct' => false],
            ['text' => 'Membeku', 'is_correct' => false],
            ['text' => 'Menguap', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Perubahan wujud dari gas menjadi cair disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Menguap', 'is_correct' => false],
            ['text' => 'Mencair', 'is_correct' => false],
            ['text' => 'Menyublim', 'is_correct' => false],
            ['text' => 'Mengembun', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Perubahan wujud dari padat langsung menjadi gas disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Menguap', 'is_correct' => false],
            ['text' => 'Menyublim', 'is_correct' => true],
            ['text' => 'Mengembun', 'is_correct' => false],
            ['text' => 'Mencair', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh benda yang berwujud gas adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Udara', 'is_correct' => true],
            ['text' => 'Kayu', 'is_correct' => false],
            ['text' => 'Air', 'is_correct' => false],
            ['text' => 'Batu', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh peristiwa mencair adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Air menjadi uap', 'is_correct' => false],
            ['text' => 'Uap menjadi air', 'is_correct' => false],
            ['text' => 'Air berubah menjadi es', 'is_correct' => false],
            ['text' => 'Es batu berubah menjadi air', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Air mendidih akan berubah menjadi?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Uap air', 'is_correct' => true],
            ['text' => 'Es', 'is_correct' => false],
            ['text' => 'Embun', 'is_correct' => false],
            ['text' => 'Salju', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Campuran yang komponennya tidak dapat dibedakan lagi disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Suspensi', 'is_correct' => false],
            ['text' => 'Larutan', 'is_correct' => true],
            ['text' => 'Emulsi', 'is_correct' => false],
            ['text' => 'Koloid', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Zat yang tidak dapat dibagi lagi secara kimia disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Molekul', 'is_correct' => false],
            ['text' => 'Campuran', 'is_correct' => false],
            ['text' => 'Unsur', 'is_correct' => true],
            ['text' => 'Senyawa', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gabungan dua unsur atau lebih secara kimia disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Campuran', 'is_correct' => false],
            ['text' => 'Larutan', 'is_correct' => false],
            ['text' => 'Unsur', 'is_correct' => false],
            ['text' => 'Senyawa', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Satuan untuk mengukur suhu adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Meter', 'is_correct' => false],
            ['text' => 'Celcius', 'is_correct' => true],
            ['text' => 'Kilogram', 'is_correct' => false],
            ['text' => 'Sekon', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sumber energi utama di Bumi adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Matahari', 'is_correct' => true],
            ['text' => 'Batu bara', 'is_correct' => false],
            ['text' => 'Air', 'is_correct' => false],
            ['text' => 'Angin', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Energi yang dihasilkan dari aliran air disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Energi angin', 'is_correct' => false],
            ['text' => 'Energi panas bumi', 'is_correct' => false],
            ['text' => 'Energi air', 'is_correct' => true],
            ['text' => 'Energi matahari', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Energi yang dihasilkan dari pergerakan udara disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Energi kimia', 'is_correct' => false],
            ['text' => 'Energi listrik', 'is_correct' => false],
            ['text' => 'Energi air', 'is_correct' => false],
            ['text' => 'Energi angin', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat yang mengubah energi listrik menjadi cahaya adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Radio', 'is_correct' => false],
            ['text' => 'Setrika', 'is_correct' => false],
            ['text' => 'Lampu', 'is_correct' => true],
            ['text' => 'Kipas angin', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat yang mengubah energi listrik menjadi gerak adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Televisi', 'is_correct' => false],
            ['text' => 'Radio', 'is_correct' => false],
            ['text' => 'Lampu', 'is_correct' => false],
            ['text' => 'Kipas angin', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat yang mengubah energi listrik menjadi panas adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Radio', 'is_correct' => false],
            ['text' => 'Setrika', 'is_correct' => true],
            ['text' => 'Lampu', 'is_correct' => false],
            ['text' => 'Kipas angin', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sumber energi yang dapat diperbarui contohnya adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Energi matahari', 'is_correct' => true],
            ['text' => 'Minyak bumi', 'is_correct' => false],
            ['text' => 'Gas alam', 'is_correct' => false],
            ['text' => 'Batu bara', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sumber energi yang tidak dapat diperbarui contohnya adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Energi matahari', 'is_correct' => false],
            ['text' => 'Batu bara', 'is_correct' => true],
            ['text' => 'Energi air', 'is_correct' => false],
            ['text' => 'Energi angin', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Energi yang tersimpan dalam makanan disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Energi listrik', 'is_correct' => false],
            ['text' => 'Energi cahaya', 'is_correct' => false],
            ['text' => 'Energi kimia', 'is_correct' => true],
            ['text' => 'Energi bunyi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pembangkit listrik yang memanfaatkan energi gerak air disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Pembangkit listrik tenaga air', 'is_correct' => true],
            ['text' => 'Pembangkit listrik tenaga angin', 'is_correct' => false],
            ['text' => 'Pembangkit listrik tenaga uap', 'is_correct' => false],
            ['text' => 'Pembangkit listrik tenaga surya', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Benda yang dapat menghantarkan listrik dengan baik disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Konduktor', 'is_correct' => true],
            ['text' => 'Semikonduktor', 'is_correct' => false],
            ['text' => 'Isolator', 'is_correct' => false],
            ['text' => 'Resistor', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Benda yang tidak dapat menghantarkan listrik disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Semikonduktor', 'is_correct' => false],
            ['text' => 'Isolator', 'is_correct' => true],
            ['text' => 'Konduktor', 'is_correct' => false],
            ['text' => 'Resistor', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh bahan isolator listrik adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Tembaga', 'is_correct' => false],
            ['text' => 'Besi', 'is_correct' => false],
            ['text' => 'Aluminium', 'is_correct' => false],
            ['text' => 'Karet', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Contoh bahan konduktor listrik adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kayu', 'is_correct' => false],
            ['text' => 'Plastik', 'is_correct' => false],
            ['text' => 'Karet', 'is_correct' => false],
            ['text' => 'Tembaga', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat untuk mengukur kuat arus listrik adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Termometer', 'is_correct' => false],
            ['text' => 'Higrometer', 'is_correct' => false],
            ['text' => 'Barometer', 'is_correct' => false],
            ['text' => 'Amperemeter', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Makhluk hidup yang dapat membuat makanannya sendiri disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Predator', 'is_correct' => false],
            ['text' => 'Pengurai', 'is_correct' => false],
            ['text' => 'Konsumen', 'is_correct' => false],
            ['text' => 'Produsen', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Makhluk hidup yang memakan makhluk hidup lain disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Produsen', 'is_correct' => false],
            ['text' => 'Pengurai', 'is_correct' => false],
            ['text' => 'Konsumen', 'is_correct' => true],
            ['text' => 'Herbivora', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Makhluk hidup yang menguraikan sisa makhluk hidup yang telah mati disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Predator', 'is_correct' => false],
            ['text' => 'Konsumen', 'is_correct' => false],
            ['text' => 'Pengurai', 'is_correct' => true],
            ['text' => 'Produsen', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Peristiwa makan dan dimakan yang berurutan disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Jaring makanan', 'is_correct' => false],
            ['text' => 'Piramida makanan', 'is_correct' => false],
            ['text' => 'Rantai makanan', 'is_correct' => true],
            ['text' => 'Ekosistem', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hubungan antar makhluk hidup dengan lingkungannya disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Ekosistem', 'is_correct' => true],
            ['text' => 'Populasi', 'is_correct' => false],
            ['text' => 'Komunitas', 'is_correct' => false],
            ['text' => 'Habitat', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Tempat hidup suatu makhluk hidup disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Ekosistem', 'is_correct' => false],
            ['text' => 'Habitat', 'is_correct' => true],
            ['text' => 'Komunitas', 'is_correct' => false],
            ['text' => 'Populasi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kumpulan individu sejenis di suatu tempat disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Komunitas', 'is_correct' => false],
            ['text' => 'Ekosistem', 'is_correct' => false],
            ['text' => 'Populasi', 'is_correct' => true],
            ['text' => 'Habitat', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh produsen dalam rantai makanan adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Tumbuhan hijau', 'is_correct' => true],
            ['text' => 'Ulat', 'is_correct' => false],
            ['text' => 'Burung', 'is_correct' => false],
            ['text' => 'Ular', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hubungan antara dua makhluk hidup yang saling menguntungkan disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Simbiosis komensalisme', 'is_correct' => false],
            ['text' => 'Predasi', 'is_correct' => false],
            ['text' => 'Simbiosis mutualisme', 'is_correct' => true],
            ['text' => 'Simbiosis parasitisme', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hubungan antara makhluk hidup yang satu diuntungkan dan yang lain dirugikan disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kompetisi', 'is_correct' => false],
            ['text' => 'Simbiosis mutualisme', 'is_correct' => false],
            ['text' => 'Simbiosis parasitisme', 'is_correct' => true],
            ['text' => 'Simbiosis komensalisme', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gaya yang menyebabkan benda jatuh ke bawah disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Gaya gesek', 'is_correct' => false],
            ['text' => 'Gaya listrik', 'is_correct' => false],
            ['text' => 'Gaya gravitasi', 'is_correct' => true],
            ['text' => 'Gaya magnet', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gaya yang timbul akibat gesekan dua permukaan benda disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Gaya gesek', 'is_correct' => true],
            ['text' => 'Gaya magnet', 'is_correct' => false],
            ['text' => 'Gaya gravitasi', 'is_correct' => false],
            ['text' => 'Gaya pegas', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gaya tarik atau tolak yang dihasilkan oleh magnet disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Gaya magnet', 'is_correct' => true],
            ['text' => 'Gaya gesek', 'is_correct' => false],
            ['text' => 'Gaya otot', 'is_correct' => false],
            ['text' => 'Gaya gravitasi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat yang menggunakan gaya pegas adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Buku', 'is_correct' => false],
            ['text' => 'Kursi', 'is_correct' => false],
            ['text' => 'Ketapel', 'is_correct' => true],
            ['text' => 'Meja', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Benda yang dapat ditarik oleh magnet adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kertas', 'is_correct' => false],
            ['text' => 'Kayu', 'is_correct' => false],
            ['text' => 'Plastik', 'is_correct' => false],
            ['text' => 'Besi', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Contoh gaya otot adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kertas terbakar', 'is_correct' => false],
            ['text' => 'Menendang bola', 'is_correct' => true],
            ['text' => 'Kompas menunjuk utara', 'is_correct' => false],
            ['text' => 'Buah jatuh dari pohon', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bidang miring, tuas, katrol, dan roda termasuk jenis?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mesin uap', 'is_correct' => false],
            ['text' => 'Alat elektronik', 'is_correct' => false],
            ['text' => 'Pesawat rumit', 'is_correct' => false],
            ['text' => 'Pesawat sederhana', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat untuk menimba air dari sumur menggunakan prinsip?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Katrol', 'is_correct' => true],
            ['text' => 'Roda berporos', 'is_correct' => false],
            ['text' => 'Tuas', 'is_correct' => false],
            ['text' => 'Bidang miring', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gerak benda yang lintasannya lurus disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Gerak melingkar', 'is_correct' => false],
            ['text' => 'Gerak acak', 'is_correct' => false],
            ['text' => 'Gerak lurus', 'is_correct' => true],
            ['text' => 'Gerak parabola', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kompas menunjukkan arah karena pengaruh?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Medan magnet Bumi', 'is_correct' => true],
            ['text' => 'Gaya gravitasi Bumi', 'is_correct' => false],
            ['text' => 'Rotasi Bumi', 'is_correct' => false],
            ['text' => 'Gaya gesek udara', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Peristiwa makan dan dimakan yang berurutan disebut Rantai makanan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Organ yang berfungsi memompa darah ke seluruh tubuh adalah Hati. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Benda yang bentuk dan volumenya berubah-ubah mengikuti wadahnya adalah wujud Gas. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Gerhana matahari terjadi ketika Matahari berada di antara Bumi dan Bulan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Perubahan wujud dari gas menjadi cair disebut Mengembun. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh bahan konduktor listrik adalah Plastik. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Zat yang tidak dapat dibagi lagi secara kimia disebut Unsur. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kompas menunjukkan arah karena pengaruh Gaya gesek udara. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat indra untuk melihat adalah Hidung. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh benda yang berwujud gas adalah Batu. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hewan pemakan daging disebut Karnivora. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Contoh peristiwa mencair adalah Es batu berubah menjadi air. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kumpulan bintang yang membentuk pola disebut Meteor. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Bidang miring, tuas, katrol, dan roda termasuk jenis Pesawat rumit. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bagian tumbuhan yang berfungsi menyerap air dan mineral dari tanah adalah Akar. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gerhana bulan terjadi ketika Bumi berada di antara Matahari dan Bulan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sistem yang mengatur seluruh kegiatan tubuh disebut Sistem otot. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Campuran yang komponennya tidak dapat dibedakan lagi disebut Larutan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Organ tempat penyerapan sari-sari makanan adalah Lambung. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat yang mengubah energi listrik menjadi gerak adalah Lampu. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Planet terbesar di tata surya adalah Jupiter. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Zat yang dibutuhkan tubuh untuk pertumbuhan dan perbaikan sel adalah Karbohidrat. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Benda yang dapat ditarik oleh magnet adalah Besi. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat untuk mengukur kuat arus listrik adalah Termometer. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pusat tata surya adalah Bintang. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh hewan yang berkembang biak dengan bertelur adalah Ayam. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Alat yang mengubah energi listrik menjadi cahaya adalah Lampu. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Gaya yang timbul akibat gesekan dua permukaan benda disebut Gaya gesek. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat untuk menimba air dari sumur menggunakan prinsip Bidang miring. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat indra untuk mendengar adalah Mata. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sumber energi utama di Bumi adalah Matahari. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Energi yang tersimpan dalam makanan disebut Energi kimia. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Sistem yang berfungsi mengedarkan darah ke seluruh tubuh disebut Sistem peredaran darah. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Gaya yang menyebabkan benda jatuh ke bawah disebut Gaya listrik. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat indra untuk mencium bau adalah Hidung. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Perubahan wujud dari padat menjadi cair disebut Mengembun. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hewan yang hidup di dua alam (darat dan air) disebut Amfibi. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bagian tubuh yang berfungsi menggerakkan tulang adalah Otot. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Energi yang dihasilkan dari aliran air disebut Energi air. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh produsen dalam rantai makanan adalah Tumbuhan hijau. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Makhluk hidup yang memakan makhluk hidup lain disebut Konsumen. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Hubungan antar makhluk hidup dengan lingkungannya disebut Komunitas. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Planet terdekat dengan Matahari adalah Merkurius. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kumpulan individu sejenis di suatu tempat disebut Ekosistem. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Bumi berputar pada porosnya disebut Presesi. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Alat indra untuk meraba disebut Kulit. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Makhluk hidup yang dapat membuat makanannya sendiri disebut Produsen. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Contoh hewan yang berkembang biak dengan beranak adalah Kucing. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sel darah yang berfungsi mengangkut oksigen adalah Plasma darah. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Planet yang memiliki cincin paling terkenal adalah Jupiter. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
];