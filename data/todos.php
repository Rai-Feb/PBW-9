<?php

$myArray = ["My name", 123, "NPM"];


$todos = [
    [
        "id" => 1,
        "title" => "Tugas PBW",
        "description" => "Kerjain tugas PBW pertemuan 5, termasuk coding dan dokumentasi sederhana",
        "priority" => 1,
        "status" => "pending",
        "deadline" => time()
    ],
    [
        "id" => 2,
        "title" => "Belajar JavaScript",
        "description" => "Pelajari array dan object di JavaScript serta coba beberapa latihan kecil",
        "priority" => 2,
        "status" => "done",
        "deadline" => time() + 86400
    ],
    [
        "id" => 3,
        "title" => "Meeting Kelompok",
        "description" => "Diskusi project akhir dengan tim, bahas pembagian tugas dan timeline",
        "priority" => 3,
        "status" => "pending",
        "deadline" => time() + (2 * 86400)
    ],
    [
        "id" => 4,
        "title" => "Olahraga",
        "description" => "Lari pagi selama 30 menit untuk menjaga kesehatan dan kebugaran tubuh",
        "priority" => 4,
        "status" => "done",
        "deadline" => time() + (3 * 86400)
    ],
    [
        "id" => 5,
        "title" => "Baca Buku",
        "description" => "Baca buku pengembangan diri minimal 20 halaman sebelum tidur malam",
        "priority" => 2,
        "status" => "pending",
        "deadline" => time() + (4 * 86400)
    ],
    [
        "id" => 6,
        "title" => "Belajar React",
        "description" => "Pelajari dasar React seperti component, props, dan state dengan latihan sederhana",
        "priority" => 1,
        "status" => "pending",
        "deadline" => time() + (5 * 86400)
    ],
    [
        "id" => 7,
        "title" => "Belajar Next JS",
        "description" => "Pelajari dasar React seperti component, props, dan state dengan latihan sederhana",
        "priority" => 1,
        "status" => "pending",
        "deadline" => time() + (5 * 86400)
    ],
];

    echo $todos[0]['title'];
?>
