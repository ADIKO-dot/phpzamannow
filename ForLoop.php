<?php
// FOR LOOP
//  for adalah salah satu kata kunci yang bisa digunakan untuk melalukan perulangan
// blok kode yang terdapat didalam for akan selalu diulangi selama kondisi for terpenuhi

// sintak perungalan for

//  for(init statement; kondisi; post statement) {
// block perulangan
// }

//  * init statement akan dieksekusi hanya sekali diawal sebelum perulangan
//  * kondisi akan dilakukan pengecekan dalam setiap perulangan , jika true perulangan akan dilakukan
//  jika false perulangan akan berhenti
//  * Post Statement akan dieksekusi setiap kali diakhir perulangan
//  * init statemen,Kondisi dan Post statement tidak wajib diisi jika Kondisi tidak diisi,
//  berarti kondisi selalu bernilai true

//  contoh penggunaan for loop
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}
//  dicrement
for ($counter = 10; $counter >= 1; $counter--) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

// syntax alternatif For Loop
for ($counter = 1; $counter <= 10; $counter++):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;