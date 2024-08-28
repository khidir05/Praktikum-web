<?php
class person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}
class mahasiswa extends person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }
    public function getnim() {
        return $this->nim;
    }
    public function setnim($nim) {
        $this->nim = $nim;
    }
    public function getRole() {
        return "mahasiswa";
    }
}
class dosen extends person {
    private $nidn;
    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }
    public function getnidn() {
        return $this->nidn;
    }
    public function setnidn($nidn) {
        $this->nidn = $nidn;
    }
    public function getRole() {
        return "dosen";
    }
}
abstract class jurnal {
    protected $judul;
    public function __construct($judul) {
        $this->judul = $judul;
    }
    abstract public function submit();

}
class JurnalDosen extends jurnal {
    public function submit() {
        return $this->judul;
    }
}
class JurnalMahasiswa extends jurnal {
    public function submit() {
        return $this->judul;
    }
}

$dosen = new Dosen("","230214");
$mahasiswa = new Mahasiswa( "","230202014");
$jurnalDosen = new JurnalDosen("Melakukan Penelitian Industri Teknik");
$jurnalMahasiswa = new JurnalMahasiswa("sedang ada Proyek PHP");


echo $dosen->getRole() . "<br>"; 
echo $jurnalDosen->submit() . "<br>";

echo $mahasiswa->getRole() . "<br>"; 
echo $jurnalMahasiswa->submit(); 
