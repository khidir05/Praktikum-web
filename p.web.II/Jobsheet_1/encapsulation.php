<?php
//Definisi class
class mahasiswa {
    //Atribut atau properti
    private $nama;
    private $nim;
    private $jurusan;

    //Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan; 
    }
    public function getNama() {
        return $this->nama;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNim() {
        return $this->nim;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function getJurusan() {
        return $this->jurusan;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    //Metode atauu function
    public function tampilkanInfo() {
        return "nama : $this->nama, nim : $this->nim, jurusan : $this->jurusan";
    }
}
class pengguna extends mahasiswa {
    private $nama;
}

//Instansiasi Objek
$kuliah = new mahasiswa("Khidir Afwan", "230202014", "Teknik Informatika");
echo $kuliah->getNama();
echo "</br>";
echo $kuliah->getNim();
echo "</br>";
echo $kuliah->getJurusan();
echo "</br>";