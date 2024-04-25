<?php

//PHP didalam HTML

//membuat variabel di PHP
//keyword : let, const <== js
//php pakai variabel "$"
//scope=cakupan
//variabel global && variabel local
//varibel global = variabel yang bisa diakses di mana saja
//variabel local = variabel yang hanya bisa diakses dibagian tertentu
$nama_depan = "Budi";
$nama_belakang = "Utomo";



//concatenation -> menggabungkan string

echo $nama_depan . " " . $nama_belakang ;
$nama = "Iza";
//operator aritmmetika = +,-,*,/,%
//operator assignment = =, +=,-=,*=
//operator perbandingan =<,>,<=,>=
//==,!=,===,!==

//tipe data = Integer, Float, String, Boolean,

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar PHP dasar</title>
</head>
<body>
    <h1><?php echo "Selamat datang $nama"?></h1>
</body>
</html>