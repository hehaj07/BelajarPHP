<?php
//perulangan : for, while, do while

//1. for

for($i=0; $i<=10; $i++){
    echo "Angka ke-$i<br>";
}

for ($j=10; $j>=1; $j--){
    echo "Angka ke-$j <br>";
}

//while
$k=0;
while ($k <= 10){
    echo "Bilangan ke-$k <br>"; $k++;
}

//do while

$x = 0;
do{
    echo "Bilangan ke-$x<br>";$x++;
}while ($x <=10);
?>