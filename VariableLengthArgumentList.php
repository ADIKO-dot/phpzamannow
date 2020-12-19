<?php
// variable length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
//  variable length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
// variable-length argument list hanya bisa dilakukan diargument posisi terakhir
// untuk membuat variable-length argument list , kita bisa menggunakan tana ...(titik tiga kali) sebelum nama argument

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total" . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);