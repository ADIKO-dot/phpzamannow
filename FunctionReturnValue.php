<?php
//  FUNCTION  RETURN VALUE
//  secara default, function itu tidak menghasilakan value apapun, namun jika kita ingin kita bisa membuat sebuah function mengembalikan nilai
//  dan di dalam block function untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
//  kita hanya bisa menghasilkan 1 data disebuah function, tidak bisa lebih dari satu

// FUNCTION RETURN VALUE PERTAMA
function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
};

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

// FUNTION RETURN VALUE KEDUA
function GetFinalValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$score = GetFinalValue(90);
var_dump($score);

$score = GetFinalValue(100);
var_dump($score);

// -----------------------------//
// RETURN TYPE DECLARATIONS
//  sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanyta
//  hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
//  untuk mendeklarasukan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya

function summ(int $first, int $second): int// mengembalikan data int
{
    $total = $first + $second;
    return $total;
};

$result = summ(10, 10);
var_dump($result);

$result = summ(100, 100);
var_dump($result);

// ---------------- contoh return string
function GetFinalValuee(int $value): string
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$score = GetFinalValuee(90);
var_dump($score);

$score = GetFinalValuee(100);
var_dump($score);