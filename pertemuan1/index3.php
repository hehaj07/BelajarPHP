<?php

//percabangan
//if
//if else
//if else..if else
//switch

$angka = 20;
if($angka % 2===0){
    echo "Ini bilangan genap";
}else{
    echo "$angka merupakan bilangan ganjil";
}
echo "<br>";

//if else..if else..

$nilai = 65 ;

if ($nilai > 85){
    echo "Index nilai anda adalah A";
}else if($nilai > 75 && $nilai<=85){
    echo "Index nilai anda adalah B";
}else if ($nilai >60 && $nilai<=75){
    echo "Index nilai anda adalah C";
}else if ($nilai >45 && $nilai <= 60){
    echo "Index nilai anda adalah D";
}else{
    echo "Index nilai anda adalah E";
}

print "<br>";

//switch case

$nilai = 90;
switch ($nilai){
    case ($nilai>85):
        echo "Index nilai anda adalah A";
        break;
    case ($nilai > 75 && $nilai <=85):
        echo "Index nilai anda adalah B";
        break;
    case ($nilai >60 && $nilai <=75):
        echo "Index nilai anda adalah C";
        break;
    case ($nilai > 45 && $nilai<=60):
        echo "Index nilai adalah D";
        break;
    case ($nilaii <=45):
        echo "Index nilai adalah E";
        break;
    default:
        echo "Nilai yang anda masukan tidak valid";
        break;
}

/* 
membuat program untuk menentukan tahun kabisat
output di dalam HTML*/


?>