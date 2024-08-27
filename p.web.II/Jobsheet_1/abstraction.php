<?php
abstract class pengguna {
    public function __construct() {

    }
    public function aksesFitur() {

    }
}
class mahasiswa extends pengguna {
    public function aksesFitur() {
        return "berhasil akses fitur ke mahasiswa";
    }
}
class dosen extends pengguna {
    public function aksesFitur(){
        return "berhasil akses fitur ke dosen";
    }
}

$mahasiswa = new mahasiswa();
$dosen = new dosen();

echo $mahasiswa->aksesFitur();