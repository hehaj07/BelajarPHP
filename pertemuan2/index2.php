<?php
//manipulasi string/teks
//explode, implode, strlen, strcmp

//strlen -> sepertinlenght pada js,mengetahui panjang string

echo strlen ("Annyeong Hasseo");

echo strlen ("Selamat datang di BLK Karawang");

echo str_word_count("Katanya, rasa kita itu adalah do'a. Jadi, 
                    baik-baiklah dalam rasa, jagalah rasa kita.");


//strcmp -> membandingkan 2 buah string/kata
$kata1="katak";
$kata2="kodok";

if (strcmp($kata1, $kata2)!== 0){
    echo "$kata1 tidak sama dengan $kata2";
} else{
echo "$kata1 sama dengan $kata2";
}
echo "<br>";
//strcasecmp -> membandingkan 2 string berdasarkan ukurang huruf

$kata1="Katak";
$kata2="katak";

if (strcmp($kata1, $kata2)!== 0){
    echo "$kata1 tidak sama dengan $kata2";
} else{
echo "$kata1 sama dengan $kata2";
}
echo "<br>";

//explode -> memecah string

print_r (explode ("-","Ayam-Geprek",0));
print_r (explode(",","Jejes, Juju,Jiji"));


//implode -> menggabungkan array menjadi string
$str = array ("Selamat", "datang", "di", "pemrograman", "PHP");
echo implode(" ",$str),"<br>";


//strtolower-> mengubah huruf besar jadi huruf kecil
echo strtolower("HARAP TENANG! SEDANG TIDUR"),"<br>";


//strtoupper -> mengubah huruf kecil jadi huruf besar
echo strtoupper ("ada udang dibalik bakwan");
echo"<br>";

//substr -> mengambil beberapa karakter didalam string

$kata3 = "pelatihan";
echo substr($kata3,2,5),"<br>";
echo substr($kata3,-7,5),"<br>";

// array nama-nama barang
$barang = ["indomie", "lifebouy", "sarimie", "indomilk", "floridina", "frutang"];

// perulangan
for ($i = 0; $i < count($barang); $i++) {
    // Mengambil tiga huruf pertama dari nama barang dan mengubahnya menjadi huruf besar
    $kodeHuruf = strtoupper(substr($barang[$i], 0, 3));
    
    // Menggabungkan kode huruf dengan nomor, memformat nomor menjadi tiga digit
    $kodeBarang = $kodeHuruf . '-' . str_pad($i + 1, 3, '0', STR_PAD_LEFT);
    
    // Tampilkan kode barang
    echo $kodeBarang . "<br>";
}


?>