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
class student extends person {
    private $studentID;

    public function __construct($studentID) { //mewarisi kelas atribut name dari parent person
        $this->studentID = $studentID;
    }
    public function getStudentID() {
        return $this->studentID;
    }
}

//mengisntansiasikan person dan student
$orang = new person("Kelas person");
echo $orang->getName() . "<br>" ;

$siswa = new student("Kelas yang menunjukan bahwa ini adalah siswa");
echo $siswa->getStudentID();
echo $siswa->getName();
