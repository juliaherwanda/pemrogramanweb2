<?php

require_once "Buku.php";

class DaftarBukuModel{

    public function getData(){
        $daftar_buku = array(
        new Buku('Belajar Pemrograman Web', 'Robert T.', 'Informatika', '2024'),
        new Buku('Matematika Diskrit', 'Rinaldi M.', 'Andi Publisher', '2017'),
        new Buku('Kalkulus', 'Emely S.', 'Airlangga', '2024'),
        new Buku('Metodologi Penelitian', 'James W.', 'UIN Publisher', '2018'),
        );

        return $daftar_buku;
    }
    
public function getKolomTabel(){
    $kolom_tabel = array(
        'No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun'
    );

    return $kolom_tabel;
}

// database: perpustakaan
// table: buku
//           id int (11) primary key auto_increment,
//           judul varchar (150),
//           pengarang varchar (150)
//           penerbit varchar (150)
//           tahun int (5)

}