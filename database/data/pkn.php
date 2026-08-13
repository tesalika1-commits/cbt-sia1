<?php

/**
 * 150 soal PKN: Pancasila, UUD 1945, lembaga negara, hak & kewajiban warga negara, nilai kebangsaan, demokrasi & pemilu.
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
        'payload' => 'Dasar negara Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bhinneka Tunggal Ika', 'is_correct' => false],
            ['text' => 'Pancasila', 'is_correct' => true],
            ['text' => 'UUD 1945', 'is_correct' => false],
            ['text' => 'GBHN', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pancasila terdiri dari berapa sila?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '3', 'is_correct' => false],
            ['text' => '6', 'is_correct' => false],
            ['text' => '5', 'is_correct' => true],
            ['text' => '4', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sila pertama Pancasila berbunyi?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Persatuan Indonesia', 'is_correct' => false],
            ['text' => 'Keadilan Sosial bagi Seluruh Rakyat Indonesia', 'is_correct' => false],
            ['text' => 'Ketuhanan Yang Maha Esa', 'is_correct' => true],
            ['text' => 'Kemanusiaan yang Adil dan Beradab', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sila kedua Pancasila berbunyi?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Ketuhanan Yang Maha Esa', 'is_correct' => false],
            ['text' => 'Kemanusiaan yang Adil dan Beradab', 'is_correct' => true],
            ['text' => 'Persatuan Indonesia', 'is_correct' => false],
            ['text' => 'Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sila ketiga Pancasila berbunyi?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Ketuhanan Yang Maha Esa', 'is_correct' => false],
            ['text' => 'Kemanusiaan yang Adil dan Beradab', 'is_correct' => false],
            ['text' => 'Persatuan Indonesia', 'is_correct' => true],
            ['text' => 'Keadilan Sosial bagi Seluruh Rakyat Indonesia', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sila keempat Pancasila berbunyi?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan dalam Permusyawaratan/Perwakilan', 'is_correct' => true],
            ['text' => 'Ketuhanan Yang Maha Esa', 'is_correct' => false],
            ['text' => 'Keadilan Sosial bagi Seluruh Rakyat Indonesia', 'is_correct' => false],
            ['text' => 'Persatuan Indonesia', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sila kelima Pancasila berbunyi?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kemanusiaan yang Adil dan Beradab', 'is_correct' => false],
            ['text' => 'Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan', 'is_correct' => false],
            ['text' => 'Keadilan Sosial bagi Seluruh Rakyat Indonesia', 'is_correct' => true],
            ['text' => 'Persatuan Indonesia', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lambang sila pertama Pancasila adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bintang', 'is_correct' => true],
            ['text' => 'Kepala banteng', 'is_correct' => false],
            ['text' => 'Pohon beringin', 'is_correct' => false],
            ['text' => 'Rantai', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lambang sila kedua Pancasila adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bintang', 'is_correct' => false],
            ['text' => 'Padi dan kapas', 'is_correct' => false],
            ['text' => 'Pohon beringin', 'is_correct' => false],
            ['text' => 'Rantai', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Lambang sila ketiga Pancasila adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Pohon beringin', 'is_correct' => true],
            ['text' => 'Kepala banteng', 'is_correct' => false],
            ['text' => 'Rantai', 'is_correct' => false],
            ['text' => 'Bintang', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lambang sila keempat Pancasila adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bintang', 'is_correct' => false],
            ['text' => 'Rantai', 'is_correct' => false],
            ['text' => 'Padi dan kapas', 'is_correct' => false],
            ['text' => 'Kepala banteng', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Lambang sila kelima Pancasila adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Pohon beringin', 'is_correct' => false],
            ['text' => 'Kepala banteng', 'is_correct' => false],
            ['text' => 'Padi dan kapas', 'is_correct' => true],
            ['text' => 'Rantai', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Burung yang menjadi lambang negara Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Merak', 'is_correct' => false],
            ['text' => 'Cendrawasih', 'is_correct' => false],
            ['text' => 'Elang', 'is_correct' => false],
            ['text' => 'Garuda', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Semboyan yang tertulis pada pita cengkeraman burung Garuda adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sekali Merdeka Tetap Merdeka', 'is_correct' => false],
            ['text' => 'Merdeka atau Mati', 'is_correct' => false],
            ['text' => 'Bhinneka Tunggal Ika', 'is_correct' => true],
            ['text' => 'Berbeda-beda tetapi Tetap Satu Jua', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Jumlah bulu pada sayap Garuda Pancasila melambangkan?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Jumlah pahlawan nasional', 'is_correct' => false],
            ['text' => 'Jumlah sila Pancasila', 'is_correct' => false],
            ['text' => 'Tanggal kemerdekaan Indonesia', 'is_correct' => true],
            ['text' => 'Jumlah provinsi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Tokoh yang merumuskan dasar negara Pancasila dalam sidang BPUPKI adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Moh. Hatta', 'is_correct' => false],
            ['text' => 'Ir. Soekarno', 'is_correct' => true],
            ['text' => 'Ahmad Soebardjo', 'is_correct' => false],
            ['text' => 'Radjiman Wedyodiningrat', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Piagam yang menjadi cikal bakal rumusan Pancasila disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Piagam HAM', 'is_correct' => false],
            ['text' => 'Piagam ASEAN', 'is_correct' => false],
            ['text' => 'Piagam Jakarta', 'is_correct' => true],
            ['text' => 'Piagam PBB', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pancasila sebagai dasar negara resmi disahkan pada tanggal?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '1 Juni 1945', 'is_correct' => false],
            ['text' => '17 Agustus 1945', 'is_correct' => false],
            ['text' => '22 Juni 1945', 'is_correct' => false],
            ['text' => '18 Agustus 1945', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Musyawarah untuk mufakat terkandung dalam sila ke?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '2', 'is_correct' => false],
            ['text' => '1', 'is_correct' => false],
            ['text' => '4', 'is_correct' => true],
            ['text' => '5', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Menghormati perbedaan agama merupakan pengamalan sila ke?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '3', 'is_correct' => false],
            ['text' => '2', 'is_correct' => false],
            ['text' => '4', 'is_correct' => false],
            ['text' => '1', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Gotong royong dan kerja bakti mencerminkan pengamalan sila ke?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '5', 'is_correct' => false],
            ['text' => '2', 'is_correct' => false],
            ['text' => '1', 'is_correct' => false],
            ['text' => '3', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pancasila berfungsi sebagai pandangan hidup bangsa yang disebut juga?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Way of life', 'is_correct' => true],
            ['text' => 'Falsafah asing', 'is_correct' => false],
            ['text' => 'Ideologi tertutup', 'is_correct' => false],
            ['text' => 'Dasar negara saja', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pancasila disebut ideologi terbuka karena?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Berasal dari negara lain', 'is_correct' => false],
            ['text' => 'Hanya berlaku untuk pemerintah', 'is_correct' => false],
            ['text' => 'Dapat menyesuaikan perkembangan zaman', 'is_correct' => true],
            ['text' => 'Tidak dapat diubah sama sekali', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hari lahir Pancasila diperingati setiap tanggal?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '1 Juni', 'is_correct' => true],
            ['text' => '28 Oktober', 'is_correct' => false],
            ['text' => '17 Agustus', 'is_correct' => false],
            ['text' => '10 November', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pancasila terdapat dalam pembukaan UUD 1945 pada alinea ke?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '4', 'is_correct' => true],
            ['text' => '2', 'is_correct' => false],
            ['text' => '3', 'is_correct' => false],
            ['text' => '1', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'UUD 1945 disahkan oleh?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'BPUPKI', 'is_correct' => false],
            ['text' => 'KNIP', 'is_correct' => false],
            ['text' => 'DPR', 'is_correct' => false],
            ['text' => 'PPKI', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'UUD 1945 disahkan pada tanggal?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '17 Agustus 1945', 'is_correct' => false],
            ['text' => '1 Juni 1945', 'is_correct' => false],
            ['text' => '18 Agustus 1945', 'is_correct' => true],
            ['text' => '22 Juni 1945', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bagian utama UUD 1945 selain pembukaan adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Lampiran saja', 'is_correct' => false],
            ['text' => 'Penjelasan resmi saja', 'is_correct' => false],
            ['text' => 'Amandemen saja', 'is_correct' => false],
            ['text' => 'Batang tubuh/pasal-pasal', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pembukaan UUD 1945 terdiri dari berapa alinea?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '5', 'is_correct' => false],
            ['text' => '2', 'is_correct' => false],
            ['text' => '4', 'is_correct' => true],
            ['text' => '3', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'UUD 1945 telah mengalami amandemen sebanyak?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '3 kali', 'is_correct' => false],
            ['text' => '5 kali', 'is_correct' => false],
            ['text' => '4 kali', 'is_correct' => true],
            ['text' => '2 kali', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Konstitusi tertulis tertinggi di Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'GBHN', 'is_correct' => false],
            ['text' => 'Pancasila', 'is_correct' => false],
            ['text' => 'UUD 1945', 'is_correct' => true],
            ['text' => 'Ketetapan MPR', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pasal yang mengatur hak asasi manusia terutama terdapat pada?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Pasal 33', 'is_correct' => false],
            ['text' => 'Pasal 30', 'is_correct' => false],
            ['text' => 'Pasal 1', 'is_correct' => false],
            ['text' => 'Pasal 28', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pasal 33 UUD 1945 mengatur tentang?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Pendidikan', 'is_correct' => false],
            ['text' => 'Hak asasi manusia', 'is_correct' => false],
            ['text' => 'Pertahanan negara', 'is_correct' => false],
            ['text' => 'Perekonomian nasional', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pasal 31 UUD 1945 mengatur tentang?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Perekonomian', 'is_correct' => false],
            ['text' => 'Kebudayaan', 'is_correct' => false],
            ['text' => 'Pertahanan negara', 'is_correct' => false],
            ['text' => 'Pendidikan', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pasal 30 UUD 1945 mengatur tentang?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hak asasi manusia', 'is_correct' => false],
            ['text' => 'Pendidikan', 'is_correct' => false],
            ['text' => 'Pertahanan dan keamanan negara', 'is_correct' => true],
            ['text' => 'Perekonomian', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bentuk negara Indonesia menurut UUD 1945 adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kesatuan', 'is_correct' => true],
            ['text' => 'Konfederasi', 'is_correct' => false],
            ['text' => 'Serikat/federasi', 'is_correct' => false],
            ['text' => 'Kerajaan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bentuk pemerintahan Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Republik', 'is_correct' => true],
            ['text' => 'Kesultanan', 'is_correct' => false],
            ['text' => 'Monarki', 'is_correct' => false],
            ['text' => 'Federasi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sistem pemerintahan Indonesia menganut sistem?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Parlementer', 'is_correct' => false],
            ['text' => 'Monarki konstitusional', 'is_correct' => false],
            ['text' => 'Komunis', 'is_correct' => false],
            ['text' => 'Presidensial', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Kedaulatan negara Indonesia berada di tangan?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Rakyat', 'is_correct' => true],
            ['text' => 'Presiden', 'is_correct' => false],
            ['text' => 'DPR', 'is_correct' => false],
            ['text' => 'MPR', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang berwenang mengubah dan menetapkan UUD adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Presiden', 'is_correct' => false],
            ['text' => 'DPR', 'is_correct' => false],
            ['text' => 'MPR', 'is_correct' => true],
            ['text' => 'MA', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga negara yang membuat undang-undang bersama presiden adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'DPR', 'is_correct' => true],
            ['text' => 'BPK', 'is_correct' => false],
            ['text' => 'MK', 'is_correct' => false],
            ['text' => 'MA', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang mewakili kepentingan daerah di tingkat pusat adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'KY', 'is_correct' => false],
            ['text' => 'DPR', 'is_correct' => false],
            ['text' => 'MPR', 'is_correct' => false],
            ['text' => 'DPD', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Lembaga yang bertugas mengawasi keuangan negara adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'KY', 'is_correct' => false],
            ['text' => 'BPK', 'is_correct' => true],
            ['text' => 'MK', 'is_correct' => false],
            ['text' => 'MA', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang berwenang menguji undang-undang terhadap UUD adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mahkamah Konstitusi', 'is_correct' => true],
            ['text' => 'Komisi Yudisial', 'is_correct' => false],
            ['text' => 'Mahkamah Agung', 'is_correct' => false],
            ['text' => 'DPR', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga peradilan tertinggi di Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kejaksaan Agung', 'is_correct' => false],
            ['text' => 'Komisi Yudisial', 'is_correct' => false],
            ['text' => 'Mahkamah Konstitusi', 'is_correct' => false],
            ['text' => 'Mahkamah Agung', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Lembaga yang mengusulkan pengangkatan hakim agung adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'DPR', 'is_correct' => false],
            ['text' => 'Mahkamah Agung', 'is_correct' => false],
            ['text' => 'Komisi Yudisial', 'is_correct' => true],
            ['text' => 'Mahkamah Konstitusi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kepala pemerintahan sekaligus kepala negara Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Gubernur Jenderal', 'is_correct' => false],
            ['text' => 'Presiden', 'is_correct' => true],
            ['text' => 'Perdana Menteri', 'is_correct' => false],
            ['text' => 'Raja', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Masa jabatan presiden Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '5 tahun', 'is_correct' => true],
            ['text' => '3 tahun', 'is_correct' => false],
            ['text' => '4 tahun', 'is_correct' => false],
            ['text' => '6 tahun', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Presiden dapat menjabat paling banyak berapa periode?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '1 periode', 'is_correct' => false],
            ['text' => '2 periode', 'is_correct' => true],
            ['text' => '3 periode', 'is_correct' => false],
            ['text' => 'Tidak terbatas', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang beranggotakan DPR dan DPD adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'MPR', 'is_correct' => true],
            ['text' => 'KPK', 'is_correct' => false],
            ['text' => 'KPU', 'is_correct' => false],
            ['text' => 'BPK', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang menyelenggarakan pemilihan umum adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'KPU', 'is_correct' => true],
            ['text' => 'DPR', 'is_correct' => false],
            ['text' => 'Bawaslu', 'is_correct' => false],
            ['text' => 'MPR', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang mengawasi jalannya pemilu adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'MPR', 'is_correct' => false],
            ['text' => 'Bawaslu', 'is_correct' => true],
            ['text' => 'DPR', 'is_correct' => false],
            ['text' => 'KPU', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang bertugas memberantas korupsi adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'KPK', 'is_correct' => true],
            ['text' => 'Kejaksaan', 'is_correct' => false],
            ['text' => 'Bawaslu', 'is_correct' => false],
            ['text' => 'Kepolisian', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Wakil rakyat di tingkat provinsi duduk di lembaga?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'DPD', 'is_correct' => false],
            ['text' => 'DPRD Provinsi', 'is_correct' => true],
            ['text' => 'MPR', 'is_correct' => false],
            ['text' => 'DPR', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kepala daerah tingkat provinsi disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Gubernur', 'is_correct' => true],
            ['text' => 'Bupati', 'is_correct' => false],
            ['text' => 'Camat', 'is_correct' => false],
            ['text' => 'Wali kota', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kepala daerah tingkat kabupaten disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bupati', 'is_correct' => true],
            ['text' => 'Wali kota', 'is_correct' => false],
            ['text' => 'Camat', 'is_correct' => false],
            ['text' => 'Gubernur', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kepala daerah tingkat kota disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bupati', 'is_correct' => false],
            ['text' => 'Gubernur', 'is_correct' => false],
            ['text' => 'Wali kota', 'is_correct' => true],
            ['text' => 'Camat', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang membantu presiden menjalankan pemerintahan disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'MPR', 'is_correct' => false],
            ['text' => 'MA', 'is_correct' => false],
            ['text' => 'Kementerian', 'is_correct' => true],
            ['text' => 'DPR', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Jumlah kementerian ditentukan oleh?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Presiden', 'is_correct' => true],
            ['text' => 'Menteri sebelumnya', 'is_correct' => false],
            ['text' => 'MPR', 'is_correct' => false],
            ['text' => 'DPR', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga penegak hukum yang bertugas melakukan penuntutan adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Kejaksaan', 'is_correct' => true],
            ['text' => 'Pengadilan', 'is_correct' => false],
            ['text' => 'KPK', 'is_correct' => false],
            ['text' => 'Kepolisian', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hak mendapatkan pendidikan diatur dalam UUD 1945 pasal?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '31', 'is_correct' => true],
            ['text' => '33', 'is_correct' => false],
            ['text' => '28', 'is_correct' => false],
            ['text' => '30', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh kewajiban warga negara adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mendapatkan perlindungan hukum', 'is_correct' => false],
            ['text' => 'Membayar pajak', 'is_correct' => true],
            ['text' => 'Mendapatkan pendidikan', 'is_correct' => false],
            ['text' => 'Mendapatkan pekerjaan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh hak warga negara adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Menaati hukum', 'is_correct' => false],
            ['text' => 'Membela negara', 'is_correct' => false],
            ['text' => 'Membayar pajak', 'is_correct' => false],
            ['text' => 'Mendapatkan pendidikan', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Setiap warga negara wajib ikut serta dalam usaha?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Menghindari hukum', 'is_correct' => false],
            ['text' => 'Mencari keuntungan pribadi', 'is_correct' => false],
            ['text' => 'Membatasi hak orang lain', 'is_correct' => false],
            ['text' => 'Pembelaan negara', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Hak untuk hidup dan mempertahankan kehidupan termasuk?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hak asasi manusia', 'is_correct' => true],
            ['text' => 'Hak ekonomi saja', 'is_correct' => false],
            ['text' => 'Hak sipil saja', 'is_correct' => false],
            ['text' => 'Hak politik saja', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kebebasan memeluk agama dijamin dalam UUD 1945 pasal?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '31', 'is_correct' => false],
            ['text' => '33', 'is_correct' => false],
            ['text' => '29', 'is_correct' => true],
            ['text' => '28', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh sikap menghormati hak orang lain adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Membeda-bedakan teman', 'is_correct' => false],
            ['text' => 'Memaksakan kehendak', 'is_correct' => false],
            ['text' => 'Tidak mengganggu ibadah orang lain', 'is_correct' => true],
            ['text' => 'Mengabaikan aturan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kewajiban menaati peraturan lalu lintas termasuk kewajiban di bidang?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Politik', 'is_correct' => false],
            ['text' => 'Hukum', 'is_correct' => true],
            ['text' => 'Ekonomi', 'is_correct' => false],
            ['text' => 'Sosial', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Musyawarah untuk mufakat sesuai dengan nilai?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Demokrasi Pancasila', 'is_correct' => true],
            ['text' => 'Liberal', 'is_correct' => false],
            ['text' => 'Monarki', 'is_correct' => false],
            ['text' => 'Otoriter', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sikap toleransi berarti?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Memaksakan pendapat', 'is_correct' => false],
            ['text' => 'Menghargai perbedaan', 'is_correct' => true],
            ['text' => 'Mengabaikan orang lain', 'is_correct' => false],
            ['text' => 'Membenci perbedaan', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh kewajiban siswa di sekolah adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Mencontek', 'is_correct' => false],
            ['text' => 'Menaati tata tertib sekolah', 'is_correct' => true],
            ['text' => 'Membolos', 'is_correct' => false],
            ['text' => 'Mengabaikan guru', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hak anak untuk bermain dan belajar termasuk?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Hak anak', 'is_correct' => true],
            ['text' => 'Hak asasi orang dewasa', 'is_correct' => false],
            ['text' => 'Hak politik', 'is_correct' => false],
            ['text' => 'Hak ekonomi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kewajiban membayar pajak diatur untuk membiayai?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Pembangunan negara', 'is_correct' => true],
            ['text' => 'Partai politik', 'is_correct' => false],
            ['text' => 'Perusahaan swasta', 'is_correct' => false],
            ['text' => 'Kepentingan pribadi pejabat', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sikap rela berkorban untuk kepentingan bangsa disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Liberalisme', 'is_correct' => false],
            ['text' => 'Egoisme', 'is_correct' => false],
            ['text' => 'Nasionalisme', 'is_correct' => true],
            ['text' => 'Individualisme', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh pelaksanaan kewajiban menjaga lingkungan adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Menebang pohon sembarangan', 'is_correct' => false],
            ['text' => 'Membuang sampah pada tempatnya', 'is_correct' => true],
            ['text' => 'Membakar sampah sembarangan', 'is_correct' => false],
            ['text' => 'Membuang limbah ke sungai', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Semboyan bangsa Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sumpah Pemuda', 'is_correct' => false],
            ['text' => 'Garuda Pancasila', 'is_correct' => false],
            ['text' => 'Merdeka atau Mati', 'is_correct' => false],
            ['text' => 'Bhinneka Tunggal Ika', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Bhinneka Tunggal Ika berarti?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Merdeka atau mati', 'is_correct' => false],
            ['text' => 'Satu nusa satu bangsa', 'is_correct' => false],
            ['text' => 'Bersatu kita teguh', 'is_correct' => false],
            ['text' => 'Berbeda-beda tetapi tetap satu', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Sumpah Pemuda diikrarkan pada kongres pemuda ke?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'I', 'is_correct' => false],
            ['text' => 'II', 'is_correct' => true],
            ['text' => 'IV', 'is_correct' => false],
            ['text' => 'III', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Isi Sumpah Pemuda menegaskan satu tanah air, satu bangsa, dan satu?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bahasa', 'is_correct' => true],
            ['text' => 'Suku', 'is_correct' => false],
            ['text' => 'Budaya', 'is_correct' => false],
            ['text' => 'Agama', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sikap cinta tanah air disebut juga?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Egoisme', 'is_correct' => false],
            ['text' => 'Liberalisme', 'is_correct' => false],
            ['text' => 'Nasionalisme', 'is_correct' => true],
            ['text' => 'Individualisme', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'NKRI adalah singkatan dari?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Negara Kerajaan Republik Indonesia', 'is_correct' => false],
            ['text' => 'Negara Kesatuan Rakyat Indonesia', 'is_correct' => false],
            ['text' => 'Negara Kesatuan Republik Indonesia', 'is_correct' => true],
            ['text' => 'Negara Kesejahteraan Rakyat Indonesia', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sikap yang mencerminkan persatuan dan kesatuan adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Individualisme', 'is_correct' => false],
            ['text' => 'Gotong royong', 'is_correct' => true],
            ['text' => 'Egoisme', 'is_correct' => false],
            ['text' => 'Diskriminasi', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Keberagaman suku, agama, ras, dan antargolongan di Indonesia disingkat?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'NKRI', 'is_correct' => false],
            ['text' => 'RAS', 'is_correct' => false],
            ['text' => 'SARA', 'is_correct' => true],
            ['text' => 'HAM', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sikap menghargai perbedaan budaya antar daerah disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Individualisme', 'is_correct' => false],
            ['text' => 'Diskriminasi', 'is_correct' => false],
            ['text' => 'Fanatisme', 'is_correct' => false],
            ['text' => 'Toleransi', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Bendera negara Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Sang Saka Hijau', 'is_correct' => false],
            ['text' => 'Bintang Kejora', 'is_correct' => false],
            ['text' => 'Merah Putih', 'is_correct' => true],
            ['text' => 'Merah Putih Biru', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lagu kebangsaan Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Padamu Negeri', 'is_correct' => false],
            ['text' => 'Garuda Pancasila', 'is_correct' => false],
            ['text' => 'Indonesia Raya', 'is_correct' => true],
            ['text' => 'Bagimu Negeri', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pencipta lagu Indonesia Raya adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'W.R. Supratman', 'is_correct' => true],
            ['text' => 'Ismail Marzuki', 'is_correct' => false],
            ['text' => 'Kusbini', 'is_correct' => false],
            ['text' => 'C. Simanjuntak', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bahasa persatuan bangsa Indonesia adalah?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bahasa Jawa', 'is_correct' => false],
            ['text' => 'Bahasa Sanskerta', 'is_correct' => false],
            ['text' => 'Bahasa Melayu Kuno', 'is_correct' => false],
            ['text' => 'Bahasa Indonesia', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Sikap rela berkorban demi kepentingan bangsa dan negara disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Patriotisme', 'is_correct' => true],
            ['text' => 'Fanatisme', 'is_correct' => false],
            ['text' => 'Individualisme', 'is_correct' => false],
            ['text' => 'Egoisme', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Semboyan gotong royong mencerminkan nilai luhur bangsa yaitu?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Persaingan', 'is_correct' => false],
            ['text' => 'Egoisme', 'is_correct' => false],
            ['text' => 'Individualisme', 'is_correct' => false],
            ['text' => 'Kebersamaan', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Sistem pemerintahan yang kekuasaannya berada di tangan rakyat disebut?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Otoriter', 'is_correct' => false],
            ['text' => 'Oligarki', 'is_correct' => false],
            ['text' => 'Demokrasi', 'is_correct' => true],
            ['text' => 'Monarki', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pemilihan umum di Indonesia dilaksanakan setiap?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '6 tahun sekali', 'is_correct' => false],
            ['text' => '4 tahun sekali', 'is_correct' => false],
            ['text' => '3 tahun sekali', 'is_correct' => false],
            ['text' => '5 tahun sekali', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Asas pemilu di Indonesia dikenal dengan sebutan?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Adil Makmur', 'is_correct' => false],
            ['text' => 'Luber Jurdil', 'is_correct' => true],
            ['text' => 'Merdeka Berdaulat', 'is_correct' => false],
            ['text' => 'Bebas Aktif', 'is_correct' => false],
        ],
    ],
    [
        'payload' => '"Luber" dalam asas pemilu adalah singkatan dari?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Luas, Umum, Bebas, Rahasia', 'is_correct' => false],
            ['text' => 'Langsung, Umum, Bebas, Rahasia', 'is_correct' => true],
            ['text' => 'Langsung, Umum, Baik, Rahasia', 'is_correct' => false],
            ['text' => 'Langsung, Ulet, Bebas, Rahasia', 'is_correct' => false],
        ],
    ],
    [
        'payload' => '"Jurdil" dalam asas pemilu adalah singkatan dari?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Jujur dan Adil', 'is_correct' => true],
            ['text' => 'Jujur dan Damai', 'is_correct' => false],
            ['text' => 'Jujur dan Disiplin', 'is_correct' => false],
            ['text' => 'Jelas dan Adil', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Warga negara yang berhak memilih dalam pemilu minimal berusia?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => '21 tahun', 'is_correct' => false],
            ['text' => '17 tahun', 'is_correct' => true],
            ['text' => '25 tahun', 'is_correct' => false],
            ['text' => '15 tahun', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pemilu di Indonesia digunakan untuk memilih, di antaranya?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Panglima TNI', 'is_correct' => false],
            ['text' => 'Hakim agung', 'is_correct' => false],
            ['text' => 'Kepala sekolah', 'is_correct' => false],
            ['text' => 'Presiden dan anggota DPR', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Musyawarah mufakat lebih diutamakan daripada voting karena mencerminkan nilai?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Persaingan', 'is_correct' => false],
            ['text' => 'Individualisme', 'is_correct' => false],
            ['text' => 'Egoisme', 'is_correct' => false],
            ['text' => 'Kekeluargaan', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Partai politik berfungsi sebagai sarana?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Membatasi hak rakyat', 'is_correct' => false],
            ['text' => 'Mencari keuntungan pribadi', 'is_correct' => false],
            ['text' => 'Menguasai pemerintahan sendiri', 'is_correct' => false],
            ['text' => 'Penyalur aspirasi rakyat', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Hasil pemilu diumumkan secara resmi oleh?',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Bawaslu', 'is_correct' => false],
            ['text' => 'MPR', 'is_correct' => false],
            ['text' => 'Presiden', 'is_correct' => false],
            ['text' => 'KPU', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Partai politik berfungsi sebagai sarana Penyalur aspirasi rakyat. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pancasila sebagai dasar negara resmi disahkan pada tanggal 18 Agustus 1945. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Sikap rela berkorban untuk kepentingan bangsa disebut Egoisme. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pancasila disebut ideologi terbuka karena Tidak dapat diubah sama sekali. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hari lahir Pancasila diperingati setiap tanggal 1 Juni. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hak untuk hidup dan mempertahankan kehidupan termasuk Hak asasi manusia. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pancasila terdapat dalam pembukaan UUD 1945 pada alinea ke 1. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => '"Jurdil" dalam asas pemilu adalah singkatan dari Jujur dan Adil. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Konstitusi tertulis tertinggi di Indonesia adalah UUD 1945. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Musyawarah mufakat lebih diutamakan daripada voting karena mencerminkan nilai Individualisme. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Lembaga yang berwenang menguji undang-undang terhadap UUD adalah DPR. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Semboyan gotong royong mencerminkan nilai luhur bangsa yaitu Kebersamaan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pancasila berfungsi sebagai pandangan hidup bangsa yang disebut juga Way of life. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sikap toleransi berarti Menghargai perbedaan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kepala daerah tingkat kabupaten disebut Bupati. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pasal yang mengatur hak asasi manusia terutama terdapat pada Pasal 1. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Bentuk negara Indonesia menurut UUD 1945 adalah Kesatuan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Keberagaman suku, agama, ras, dan antargolongan di Indonesia disingkat SARA. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Lembaga peradilan tertinggi di Indonesia adalah Komisi Yudisial. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pembukaan UUD 1945 terdiri dari berapa alinea 4. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang berwenang mengubah dan menetapkan UUD adalah DPR. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga yang bertugas memberantas korupsi adalah Kejaksaan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Bendera negara Indonesia adalah Merah Putih. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'NKRI adalah singkatan dari Negara Kesatuan Republik Indonesia. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lembaga penegak hukum yang bertugas melakukan penuntutan adalah Kepolisian. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lambang sila pertama Pancasila adalah Bintang. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Musyawarah untuk mufakat terkandung dalam sila ke 4. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sumpah Pemuda diikrarkan pada kongres pemuda ke II. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh hak warga negara adalah Membela negara. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Jumlah kementerian ditentukan oleh Presiden. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Musyawarah untuk mufakat sesuai dengan nilai Liberal. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'UUD 1945 disahkan oleh PPKI. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Contoh sikap menghormati hak orang lain adalah Tidak mengganggu ibadah orang lain. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh kewajiban warga negara adalah Mendapatkan pendidikan. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Isi Sumpah Pemuda menegaskan satu tanah air, satu bangsa, dan satu Budaya. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kepala pemerintahan sekaligus kepala negara Indonesia adalah Presiden. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Asas pemilu di Indonesia dikenal dengan sebutan Merdeka Berdaulat. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => false],
            ['text' => 'Salah', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Pemilihan umum di Indonesia dilaksanakan setiap 5 tahun sekali. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sikap cinta tanah air disebut juga Nasionalisme. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Kewajiban menaati peraturan lalu lintas termasuk kewajiban di bidang Hukum. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Hak mendapatkan pendidikan diatur dalam UUD 1945 pasal 31. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Lambang sila kedua Pancasila adalah Bintang. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Burung yang menjadi lambang negara Indonesia adalah Merak. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Pencipta lagu Indonesia Raya adalah W.R. Supratman. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Contoh kewajiban siswa di sekolah adalah Menaati tata tertib sekolah. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Dasar negara Indonesia adalah Pancasila. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Bagian utama UUD 1945 selain pembukaan adalah Penjelasan resmi saja. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Sila kelima Pancasila berbunyi Kemanusiaan yang Adil dan Beradab. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => true],
            ['text' => 'Benar', 'is_correct' => false],
        ],
    ],
    [
        'payload' => 'Kebebasan memeluk agama dijamin dalam UUD 1945 pasal 29. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Salah', 'is_correct' => false],
            ['text' => 'Benar', 'is_correct' => true],
        ],
    ],
    [
        'payload' => 'Lambang sila keempat Pancasila adalah Kepala banteng. (Benar atau Salah?)',
        'score' => 1,
        'description' => null,
        'options' => [
            ['text' => 'Benar', 'is_correct' => true],
            ['text' => 'Salah', 'is_correct' => false],
        ],
    ],
];