<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

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

    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode setter untuk mengubah nilai NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Membuat objek dan mengubah nilai NIM
$mhs4 = new Mahasiswa("Khidir Afwan", "230202014", "Teknik Informatika");
$mhs4->setNim("240202021");

// Menampilkan data mahasiswa yang sudah diperbarui
echo $mhs4->tampilkanData();

