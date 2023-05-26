<?php

$text = $_POST["text"];
$n = $_POST["n"];
$arr = array();
for($i = 0; $i < $n ; $i++){
    $arr[] = "$text$i";
}
/*
sleep digunakan untuk melakukan blocking pada kode yang ada di bawah
tujuannya mensimulasikan server meload data dan memberikan response setelah 3 detik
*/
sleep(3);
echo json_encode([
    "data" => $arr
]);