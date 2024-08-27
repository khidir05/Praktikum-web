<?php
//Definisi class
class buku {
    //Atribut atau properti
    public $judul;
    public $penulis;

    //Constructor
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    //Metode atauu function
    public function tampilkanInfo() {
        return "judul : $this->judul, Penulis : $this->penulis";
    }
}

//Instansiasi Objek
$buku1 = new Buku("Pemrogaman PHP", "Khidir Afwan");
echo $buku1->tampilkanInfo();
?>