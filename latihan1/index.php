<?php
//fungsi menghitung hari

/*
function hariSelanjutnya($hariAwal, $jumlahHari){
$hariEn=date("l", strtotime("$jumlahHari Hari", strtotime($hariAwal)));

//switch

switch ($hariEn){
    case "Monday":
        $hariIndo= "Senin";
        break;
    case "Tuesday":
        $hariIndo = "Selasa";
        break;
    case "Wednesday":
        $hariIndo= "Rabu";
        break;
    case "Thursday":
        $hariIndo="Kamis";
        break;
    case "Friday":
        $hariIndo = "Jum'at";
        break;
    case "Saturday":
        $hariIndo="Sabtu";
        break;
    case "Sunday":
        $hariIndo="Minggu";
        break;
        default:
        $hariIndo="Hari tidak diketahui";
        break;
    }
    return $hariIndo;
}

$hariIni="2024-04-24";//Y M D
$hariKemudian = hariSelanjutnya ($hariIni,100);
echo "100 Hari setelah tanggal $hariIni adalah hari $hariKemudian";
*/


function menghitungHari ($jmlHari){

$namaHari=date('l', strtotime(date("Y-m-d")."+".$jmlHari." days"));

switch ($namaHari){
    case "Monday":
        $translateHari="Senin";
        break;
    case "Tuesday":
        $translateHari="Selasa";
        break;
    case "Wednesday":
        $translateHari="Rabu";
        break;
    case "Thursday":
        $translateHari="Kamis";
        break;
    case "Friday":
        $translateHari="Jum'at";
        break;
    case "Saturday":
        $translateHari="Sabtu";
        break;
    case "Sunday":
        $translateHari="Minggu";
        break;
    default:
        $translateHari = "Nama hari tidak valid";
        break;
  }
  return $translateHari;

}
$jumlahHari=120;
echo "$jumlahHari hari setelah hari ini adalah hari ". menghitungHari($jumlahHari);
?>