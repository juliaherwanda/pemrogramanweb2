<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum3</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
        include "OrangBiasa.php";
        include "OrangInggris.php";
        include "Mahasiswa.php";

        $herwanda = new OrangBiasa('Herwanda');
        $herwanda->ucapSalam();
        echo "<br>";

        $julia = new OrangInggris('Julia');
        $julia->ucapSalam(); //override
        echo "<br>";

        $julia = new Mahasiswa('Julia');
        $julia->ucapSalam();
        echo "<br>";
        $julia->setNim("701230064");
        $julia->setProdi("Sistem Informasi");

        $nilaiJulia = new Nilai();
        $nilaiJulia->setTugas(91);
        $nilaiJulia->setUts(88);
        $nilaiJulia->setUas(90);

        $julia->setNilai($nilaiJulia);
        $julia->tampilkanData();

     ?>
    </div>
</body>
</html>