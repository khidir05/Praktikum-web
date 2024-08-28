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
class teacher extends person {
    private $teacherID;
    public function __construct($teacherID) {
        $this->teacherID = $teacherID;
    }
    public function getTeacherID() {
        return $this->teacherID;
    }
}
$siswa = new Student("Khidir");
$guru = new teacher("Afwan");

echo $guru ->getTeacherID();
echo $siswa->getStudentID();
