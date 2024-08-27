<?php
//Mulai mendefinisikan kelas
class mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    //Metode menampilkan data

    public function tampilkanData(){
        return "Nama : $this->nama<br>" . 
               "NIM : $this->nim<br>".  
               "Jurusan : $this->jurusan";
    }
}

$mhs = new mahasiswa ();
$mhs->nama = "Khidir";
$mhs->nim = "230202014";
$mhs->jurusan = "Teknik Informatika";

echo $mhs->tampilkanData();