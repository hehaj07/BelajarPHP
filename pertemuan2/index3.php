<?php
$kata1="Indomie";
echo substr($kata1,0,3),"-001","<br>";

$kata2 ="Lifebouy";
echo substr($kata2,0,3),"-002","<br>";

$kata3 ="Sarimie";
echo substr($kata3,0,3),"-003","<br>";

$kata4 ="Indomilk";
echo substr($kata4,0,3),"-004","<br>";

$kata5 ="Floridina";
echo substr($kata5,0,3),"-005","<br>";

$kata6 ="Frutang";
echo substr($kata6,0,3),"-006","<br>";


//user defined function
/*
function namaFungsi ($param1, $param2,$param3,..){
    //perintah dieksekusi
}
*/
//camelCase<-prinsip penamaan fungsi(awali dengan huruf kecil)
/*function penjumlahan($a,$b){
    return $a+$b;
}
echo penjumlahan(5,6),"<br>";*/

$alas = 5;
$tinggi = 10;
function luasSegitiga($alas, $tinggi)
{
    return 0.5*$alas*$tinggi;
}
echo "Luas Segitia dengan panjang alas $alas dan tinggi $tinggi adalah ".luasSegitiga($alas,$tinggi),"<br>";

//default parameter
function sapa($waktu="",$nama="")
{
    if ($waktu === "" && $nama === ""){
        return "Selamat Datang User!";
    }else{
        return "Selamat $waktu, $nama";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1><?php echo sapa("Siang", "Fia")?></h1>
</body>
</html>