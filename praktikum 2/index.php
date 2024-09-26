<?php
    include "Orang.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello julia</title>
</head>
<body>
    <h1>hello Praktikum 2</h1>
    <div>
        <?php
        //proses instanisasi
        $mahasiswa = new Orang('Julia herwanda');

        //menggunakan setter dan getter
        $mahasiswa->setNama('herwanda');
        $mahasiswa->setTglLahir('2005-06-03');
        $mahasiswa->setAlamat('Tebo,Jambi');

        echo "<br>";
        echo "Data Mahasiswa". $mahasiswa->getNama(). "br";
        echo "Nama : ". $mahasiswa->getNama() ."<br>";
        echo "Tgl Lahir : ". $mahasiswa->getTglLahir() ."<br>";
        echo "Alamat : ". $mahasiswa->getAlamat() ."<br>";

        //memanggil method
        $mahasiswa->ucapkanSalam();

        echo "<br>";
        $mahasiswa2 = new Orang('El Kecepatan');

        $mahasiswa2->ucapkanSalam();
        ?>
    </div>
</body>
</html>