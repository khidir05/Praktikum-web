<?php
class produk {
    protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}
class buku extends produk {
    private $penulis;

    public function __construct($nama, $penulis) 
    {
        parent::__construct($nama);
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }
}

$buku = new buku("Pemrograman PHP", "Khidir Afwan");
echo $buku->getNama();