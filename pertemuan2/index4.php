<?php
//array
//cara lama
$arr=array(1,3,4,7,9,11,30);
print_r ($arr);
print "<br>";

//cara baru
$arr2=["Maulana", "Chandra", "Yudha", "Naufal"];
print_r($arr2);
print "<br>";
var_dump ($arr2);
echo $arr2[2];

//menambah dan mengedit
$arr2[4]="Jabbar";
print "<br>";
$arr2[3]="Nusa";
//menambah tanpa indeks, langsung dimasukan keurutan terakhir
$arr2[]="Saeful";

print_r($arr2);

//perulangan "foreach"

foreach($arr2 as $a){
    echo $a,"<br>";
}

?>