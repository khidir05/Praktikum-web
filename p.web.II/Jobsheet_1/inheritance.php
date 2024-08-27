<?php
class pengguna {
    protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}
class dosen extends pengguna {
    private $matakuliah;

    public function __construct($nama, $matakuliah) 
    {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    public function getDosen(){
        return $this->matakuliah;
    }
}

$pengampu = new dosen("Khidir Afwan", "Sistem instalasi kelistrikan");
echo $pengampu->getNama();
echo "</br>";
echo $pengampu->getDosen();