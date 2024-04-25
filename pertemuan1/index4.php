<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tahun = 2020;
    if($tahun % 4===0 || $tahun % 400 === 0){
        echo "<p>$tahun adalah tahun kabisat</p>";
    }else{
        echo "<p>$tahun bukan tahun kabisat</p>";
    }
    echo "<br>";
    
    ?>
</body>
</html>