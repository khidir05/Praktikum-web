<?php
class pengguna {
    public function __construct() {
    }
    public function aksesFitur() {
        return "Saya user";
    }
}
class dosen extends pengguna {
    public function __construct() {
    }
    
    public function aksesFitur() {
        return"Saya dosen";
    }
}
class mahasiswa extends pengguna {
    public function __construct() {
    }

    public function aksesFitur() {
        return "saya mahasiswa";
    }
}

$mahasiswa = new mahasiswa();
$dosen = new dosen();
$pengguna = new pengguna();
echo $mahasiswa->aksesFitur();


