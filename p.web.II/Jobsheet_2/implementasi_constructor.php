<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: $this->nama <br>" .
               "NIM: $this->nim <br>" .
               "Jurusan: $this->jurusan <br>";
    }
}

$mhs2 = new Mahasiswa("Khidir Afwan", "230202014", "Sistem Informatika");

// Menampilkan data mahasiswa
echo $mhs2->tampilkanData();
?>
