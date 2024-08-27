<?php
//Definisi kelas
class mobil{
    //Attribut / properti
    public $merk;
    public $warna;
    //constructor

    public function __construct($merk,$warna){
        $this->merk = $merk;
        $this->warna = $warna;
    }
    //metode / function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwarna $this->warna";
    }
}
//instansiasi 
$mobil = new mobil("Toyota", "Hitam");
echo $mobil->deskripsi();