<?php
//  while loop adalah versi perulangan yang lebih sederhana dibanding fot loop
//  di whileloop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement
$counter = 1;

while ($counter <= 10) {
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
}

//  syntax alternatifnya

while ($counter <= 10):
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;