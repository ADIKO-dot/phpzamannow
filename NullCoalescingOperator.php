<?php
//  NULL COALESCING OPERATOR
//  sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL Di PHP
//  dan hal yang paling repot diPHP adalah mengecek apakah sebuah data ada atau tidak , dan juga apakag data tersebut isinya null atau bukan
//  biasanya untuk melakukan itu , kita perlu menggunakan pengecekan if statement dengan function isset ($variable)
//  namun untungnya di php ada null coalescing operator menggunakan tanda ??

//  menggunakan if statement
$data = [
    "action" => "Create",
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

//  menggunakan nullcoalescingoperator

$action = $data["action"] ?? "Nothing";
echo $action . PHP_EOL;