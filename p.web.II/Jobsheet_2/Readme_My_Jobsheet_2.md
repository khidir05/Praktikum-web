# Joobsheet 2
## _Implementasi Prinsip OOP dalam PHP_
**Tujuan**
Dengan jobsheet ini, mahasiswa diharapkan mampu menerapkan konsep kelas dan objek dalam PHP melalui serangkaian tugas yang menekankan pada pembuatan dan penggunaan kelas serta objek.

## Membuat class dan object
Nama file  **_class_dan_object.php_**
```sh
<?php
//Mulai mendefinisikan kelas
class mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    //Metode menampilkan data

    public function tampilkanData(){
        return "Nama : $this->nama<br>" . 
               "NIM : $this->nim<br>".  
               "Jurusan : $this->jurusan";
    }
}

$mhs = new mahasiswa ();
$mhs->nama = "Khidir";
$mhs->nim = "230202014";
$mhs->jurusan = "Teknik Informatika";

echo $mhs->tampilkanData();
```
disana kita mempunyai kelas _mahasiswa_ yang didalamnya memiliki 3 atribut yaitu _($nama, $nim, $jurusan)_.
setelah itu juga ada method _tampilkanData()_ yang berfungsi untuk menampilkan atribut yang sudah ditetapkan di kelas _mahasiswa_ dengan cara mengembalikan nilai atribut itu sendiri atau dengan _return_.
**Berikut adalah hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/94efafd96bd5174c998e53d709a3408711b5e1a6/p.web.II/Jobsheet_2/Dokumentasi/Screenshot%202024-08-27%20143404.png?raw=true)

## Mengimplemetasikan Constructor
Nama file **_implementasi_constructor.php_**
```sh
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    } //Memproses atribut di dalam fungsi

    public function tampilkanData() {
        return "Nama: $this->nama <br>" .
               "NIM: $this->nim <br>" .
               "Jurusan: $this->jurusan <br>"; //mengembalikan fungsi tampilkanData()
    }
}

$mhs2 = new Mahasiswa("Khidir Afwan", "230202014", "Sistem Informatika");

// Menampilkan data mahasiswa
echo $mhs2->tampilkanData();
```
Kurang lebih penjelasan kelas dan atribut didalamnya hampir sama, hanya saja kali ini kita menggunakan _ __constructor_ yang bertujuan utnuk mengatur nilai yang akan di instansikan, atau singkatnya agar lebih mudah dan tertata.
kemudian ada metode _tampilaknData()_ yang memproses fungsi atau metode untuk mengembalikan nilai yang diatas.
**Berikut adalah hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/94efafd96bd5174c998e53d709a3408711b5e1a6/p.web.II/Jobsheet_2/Dokumentasi/Screenshot%202024-08-27%20151452.png?raw=true)

## Membuat metode tambahan
Nama filenya **_tambahan.php_**
```sh
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: $this->nama <br>" .
               "NIM: $this->nim <br>" .
               "Jurusan: $this->jurusan <br>";
    }

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

$mhs3 = new Mahasiswa("Khidir", "230202014", "Teknik Informatika");

// Mengubah jurusan
 $mhs3->updateJurusan("Teknik ELektro");

// Menampilkan data mahasiswa yang sudah diperbarui
 echo $mhs3->tampilkanData();
```
Disini juga sama seperti yang diatas hanya saja disini ada metode _updateJurusan_ dengan cara dia mengganti atribut yang sudah dikelola oleh  __construct_ atribut _jurusan_ dengan _jurusanBaru_
**berikut adalah hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/94efafd96bd5174c998e53d709a3408711b5e1a6/p.web.II/Jobsheet_2/Dokumentasi/Screenshot%202024-08-27%20151509.png?raw=true)

## Penggunaan atribut dan metode
Nama filenya **_atribut_dan_metode.php_**
```sh
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: $this->nama <br>" .
               "NIM: $this->nim <br>" .
               "Jurusan: $this->jurusan <br>";
    }

    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode setter untuk mengubah nilai NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Membuat objek dan mengubah nilai NIM
$mhs4 = new Mahasiswa("Khidir Afwan", "230202014", "Teknik Informatika");
$mhs4->setNim("240202021");

// Menampilkan data mahasiswa yang sudah diperbarui
echo $mhs4->tampilkanData();
```
File ini juga sama seperti yang membuat metode tambahan yang beda hanya nama metodenya saja yaitu _setNim() baru
**berikut hasilnya:**
![alt text]https://github.com/khidir05/Praktikum-web/blob/94efafd96bd5174c998e53d709a3408711b5e1a6/p.web.II/Jobsheet_2/Dokumentasi/Screenshot%202024-08-27%20151527.png?raw=true)

## Tugas
Nama filenya **_tugas.php_**
```sh
<?php
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        return "Nama: $this->nama <br>" .
               "NIP: $this->nip <br>" .
               "Mata kuliah: $this->mataKuliah <br>";
    }
}

// Membuat objek dari kelas Dosen dan menampilkan informasinya
$dosen1 = new Dosen("KH. Afwan", "230202014", "Instalasi Jaringan Listrik");
echo $dosen1->tampilkanDosen();
```
Ini juga sama sepeerti file sebelumnya bahkan di jobsheet sebelumnya juga. Ada kelas _Dosen_ dengan Atribut _nama, nim_, dan _mataKuliah_. Kemudian di konstrak agar terlihat lebih rapih dan ringkas setelah itu nilai atributnya di kembalikan dengan fungsi _tampilkanDosen_ dengan _return_
**Berikut adalah hasilnya:**
![alt text](https://github.com/khidir05/Praktikum-web/blob/94efafd96bd5174c998e53d709a3408711b5e1a6/p.web.II/Jobsheet_2/Dokumentasi/Screenshot%202024-08-27%20151539.png?raw=true)

_Sekian dari kami, jika ada yang kurang tepat dalam penyampaian kami, silahkan beri komentar melalui github kami_