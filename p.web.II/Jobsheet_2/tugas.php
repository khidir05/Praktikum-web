<?php
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        return "Nama: $this->nama <br>" .
               "NIP: $this->nip <br>" .
               "Mata kuliah: $this->mataKuliah <br>";
    }
}

// Membuat objek dari kelas Dosen dan menampilkan informasinya
$dosen1 = new Dosen("KH. Afwan", "230202014", "Instalasi Jaringan Listrik");
echo $dosen1->tampilkanDosen();
?>
