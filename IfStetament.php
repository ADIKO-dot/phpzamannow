<?php
//   dalam PHP, IF adalah salah satu kata kunci yang digunakan untu percabangan
//  percabangan artunta kita bisa mengeksekusi kode program tertentu ketika seatu kondisi terpenuhi
//  hampir di semua bahasa pemrograman mendukung if expression

$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat Anda Lulus" . PHP_EOL;
}
//  ELSE STATEMENT
//  blok if akan dieksekusi ketika kondisi if bernilai true
//  kadang kita ingin melakukan ekseksi program tertentu jika kondisi if bernilai false
//  hal ini bisamdilakukan menggunakan else statement

$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf Anda Tidak Lulus" . PHP_EOL;
}

// ELSE IF STATEMENT
//  kada dalam if, kita butuh membuat beberapa kondisi
//  kasus seperti ini, di PHP kita bisa menggunakan ELse If statement
//  Else if di PHP bisa lebih dari satu
//  kode Else if di php bisa menggunakan "else if" atau"elseif(digabung)
$nilai = 80;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

// syntax alterrnatif
//  selain menggunakan {}, PHP juga menyediakan syntax alternatif untuk menggunakan if
//  yaitu dengan menggunakan :(titik dua)
//  namun untuk menggunakan ini , kita harus menggunakan kata kucni endif diakhir if statemnet

if ($nilai >= 80 && $absen >= 80):
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai Anda D" . PHP_EOL;
else:
    echo "Nilai Anda E" . PHP_EOL;
endif;