<?php 
$mhs =[
    [
        "prodi" => "Informatika",
        "nim" => "22416255201204",
        "nama" => "Akbar",
        "alamat" => "Cikampek",
    ],
       
    [
        "prodi" => "Informatika",
        "nim" => "22416255201138",
        "nama" => "Fajar",
        "alamat" => "Telagasari",
    ],
    [
        "prodi" => "Informatika",
        "nim" => "22416255201165",
        "nama" => "Bisma",
        "alamat" => "Isekai",
    ],   
    [

        "prodi" => "Informatika",
        "nim" => "22416255201152",
        "nama" => "Putra",
        "alamat" => "Purwasari",
    ],
    [   
        "prodi" => "Informatika",
        "nim" => "22416255201204",
        "nama" => "Fahri",
        "alamat" => "Telagasari",
        
    ],
];

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Daftar Mahasiswa</h2>
        <table border="1px align= "center" cellpadding="3">
        <tr><th >NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Prodi</th>
        </tr>
        <?php foreach ($mhs as $m):?>
        <tr>
            <td><?php echo $m ["nim"]?></td>
            <td><?php echo $m ["nama"]?></td>
            <td><?php echo $m ["alamat"]?></td>
            <td><?php echo $m ["prodi"]?></td>
        </tr>
            <?php endforeach?>
    </table>
        
    </body>
    </html>