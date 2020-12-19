<?php
// salah satu fitur yang sebenranya jarang sekali digunakan di PHP adalah hoto operator
// kenapa jarang digunakan karena jika terlalu banyak menggunakan goto operator, kode program aplikasinya akan mudah membingungkan yang membaca kodenya
//  goto adalah ftur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
//  agar goto bisa loncat ke kode program , kita harus membuuat label di php dengan menggunakan nama label lalu diakhiri :(colon)

goto a;
//  code diatas akan menskip code dibawahnya
// dan langsung mengarah kepada code (a:)
echo "CONTOH TEXT YANG KE SKIP" . PHP_EOL;

// goto akan langsung mengeksekusi code diabawah ini
a:
echo "KODE YANG DITAMPILAN DARI GOTO A" . PHP_EOL;

//  penggunaan goto yang lebih komplek
$counter = 1;

while (true) {
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }

}
end:
echo "TEXT DARI GOTO END MENGARAH KESINI" . PHP_EOL;