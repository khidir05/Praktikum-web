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

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

$mhs3 = new Mahasiswa("Khidir", "230202014", "Teknik Informatika");

// Mengubah jurusan
 $mhs3->updateJurusan("Teknik ELektro");

// Menampilkan data mahasiswa yang sudah diperbarui
 echo $mhs3->tampilkanData();
?>
