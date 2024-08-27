<?php
//Definisi class
class mahasiswa {
    //Atribut atau properti
    public $nama;
    public $nim;
    public $jurusan;

    //Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan; 
    }
    //Metode atauu function
    public function tampilkanInfo() {
        return "nama : $this->nama, nim : $this->nim, jurusan : $this->jurusan";
    }
}

//Instansiasi Objek
$kuliah = new mahasiswa("Khidir Afwan", "230202014", "Teknik Informatika");
echo $kuliah->tampilkanInfo();
