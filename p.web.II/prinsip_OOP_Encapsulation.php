<?php
class buku {
    private $judul;
    private $penulis;

    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setJudul ($judul){
        $this->judul = $judul;
    }
}
$buku1 = new buku ("Pemrograman PHP", "Khidir Afwan");
echo $buku1->getJudul();