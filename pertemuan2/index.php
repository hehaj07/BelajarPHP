<?php
//function->program didalam program

// 1. Build in Function ->fungsi yang sudah tersedia di PHP
// 2. User-Defined Function -> fungsi yang dibuat oleh programmer

// waktu: date, time, mktime, strtotime
//date
/*
l -> nama hari lengkap
d-> hari format 01-31
j -> hari format 1-31
M -> nama bulan 3karakter
m -> bulan format angka
F -> nama bulan lengkap
Y -> tahun

H -> jam
i -> menit
s -> detik
*/
date_default_timezone_set ("Asia/Jakarta");
echo date ("l, j F Y H:i:s");
echo "<br>";

//time=jumlah detik sejak 1 januari 1970

//echo time();

//mktime
//echo mktime(0,0,0,7,13,1997);//jumlah detik dari 1 januari 1970 -tgl tersebut

//strtotime -> mengubah string jadi tanggal
echo strtotime("24 April 2024");
echo "<br>";

//date_parse -> memecah tanggal
print_r (date_parse("2024-04-24"));

?>