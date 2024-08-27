# Joobsheet 1
## _Implementasi Prinsip OOP dalam PHP_
**Tujuan**
Melalui jobsheet ini, mahasiswa diharapkan mampu mengimplementasikan konsep dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta menerapkan prinsip Encapsulation, Inheritance, Polymorphism, dan Abstraction.

## Membuat class dan object
Nama file  **_class_dan_object.php_**
```sh
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
```
disana kita mempunyai kelas _mahasiswa_ yang didalamnya memiliki 3 atribut yaitu _($nama, $nim, $jurusan)_ yang menjadi kunci utama dan didalamnya terdapat __construct yang bertujuan sebagai penerjemah atribut yang akan berjalan dan menjadi pintasan atau agar bisa menjadi kode ringkas saat di instansiasi.
setelah itu juga ada method _tampilkanInfo()_ yang berfungsi untuk menampilkan atribut yang sudah ditetapkan di kelas _mahasiswa_ dengan cara mengembalikan nilai atribut itu sendiri atau dengan _return_.
**Berikut adalah hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/178c99cdb221365133a1eebd465148de4df0c400/p.web.II/Jobsheet_1/Dokumentasi/Screenshot%202024-08-27%20103155.png?raw=true)

## Membuat Encapsulation
Nama file **_encapsulation.php_**
```sh
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
    //Membuat setter dan getter atribut nama
    public function getNama() {
        return $this->nama;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    //membuat setter dan getter atribut nim 
    public function getNim() {
        return $this->nim;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    //Membuat setter dan getter atribut jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    //Metode tampilkan info()
    public function tampilkanInfo() {
        return "nama : $this->nama, nim : $this->nim, jurusan : $this->jurusan";
    }
}

//Instansiasi Objek
$kuliah = new mahasiswa("Khidir Afwan", "230202014", "Teknik Informatika");
echo $kuliah->getNama();
echo "</br>";
echo $kuliah->getNim();
echo "</br>";
echo $kuliah->getJurusan();
echo "</br>";
```
Kurang lebih penjelasan kelas dan atribut didalamnya hampir sama, hanya saja kali ini kita menggunakan _private_ sebagai _visibility_ dari kelasnya yang bertujuan agar atribut itu cukup bisa diakses oleh kelas itu sendiri.
setelah itu sesuai dengan instruksi, kami membuat getter dan setter untuk setiap atribut yang bertujuan agar atribut yang kami pasang private itu bisa berubah dari metode yang sudah ditetapkan saja.
kemudian ada metode _tampilaknInfo()_ yang memproses fungsi atau metode untuk mengembalikan nilai yang diatas.
**Berikut adalah hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/178c99cdb221365133a1eebd465148de4df0c400/p.web.II/Jobsheet_1/Dokumentasi/Screenshot%202024-08-27%20110157.png?raw=true)

## Membuat Inheritance
Nama filenya **_inheritance.php_**
```sh
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
```
Disini ada kelas _pengguna_ yang didalamnya terdapat atribut _nama_ yang _visibility_nya protected. Apa bedanya _protected_ dengan _private_ ? Kalau _protected_ itu menjaga atribut agar tidak diakses oleh kelas lain kecuali turunannya atau cuman boleh untuknya dan anaknya saja, berbeda dengan _private_ yang visibilitasnya hanya untuk dirinya saja atau kelas itu saja tidak bisa diakses oleh kelas lain maupun anaknya. Agar ini bisa atribut nama diakses secara khusus makanya kita gunakkan _getter_.
Kemudian ada kelas _dosen_ yang mendapatkan turunan atau akses dari kelas _pengguna_. Didalamnya ada atribut _mataKuliah_ dengan visibilitas _private_ agar cukup kelas _dosen_ saja yang dapat akses saja. terdapat constract juga hanya saja didalam itu ada _parent::_ dengan tujuan bisa mengakses lebih ke kelas _pengguna_. Terus juga ada fungsi _getDosen_ yang akan mengambil atribut _mataKuliah_
**berikut adalah hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/178c99cdb221365133a1eebd465148de4df0c400/p.web.II/Jobsheet_1/Dokumentasi/Screenshot%202024-08-27%20111851.png?raw=true)

## Membuat Polymorphism
Nama filenya **_Polymorphism.php_**
```sh
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
```
Di file ini sperti penjelasan di file sebelumnya. yang berbeda adalah disini memnaggil method yang sama untuk penggunaan yang berbeda seperti method _aksesfitur_. method ini memanggil metode yang sama untuk penggunaan yang berbeda. seperti ada kelas _dosen_, kelas _pengguna_, kelas _mahasiswa_, mereka menggunakan cara yang sama tapi hasilnya berbeda.
**berikut hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/178c99cdb221365133a1eebd465148de4df0c400/p.web.II/Jobsheet_1/Dokumentasi/Screenshot%202024-08-27%20120454.png?raw=true)

## Pembuatan Abstraction
Nama filenya **_Abstraction.php_**
```sh
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
```
Disini hampir sama seperti file _polymorphism.php_ hanya saja ada bentuk yang sedikit berbeda, yaitu ada penambahan _abstract_ pada kelas. Ini bertujuan membatasi fungsi kelas itu sendiri.
**Berikut adalah hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/178c99cdb221365133a1eebd465148de4df0c400/p.web.II/Jobsheet_1/Dokumentasi/Screenshot%202024-08-27%20120517.png?raw=true)

_Sekian dari kami, jika ada yang kurang tepat dalam penyampaian kami, silahkan beri komentar melalui github kami_