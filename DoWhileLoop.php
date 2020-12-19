<?php
//  do while loop adalah perulanganyang mirip dengan while
// perbedaanya hanya pada pengecekan kondisi
//  pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan
//  sedangkan di do while loop dilakukan setelah perulangan dilakukan
//  oleh karena itu dalam do while loop minimal,pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true
$counter = 100;

do {
    echo "Ini adalah do while loop ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);
//  menggunakan do while code akan dijalankan 1 kali mau true atau false
//  jika false maka code selanjutnya tidak akan dijalankan