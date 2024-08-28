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
class Student extends person {
    private $studentID;

    public function __construct($name, $studentID) {
        $this->name = $name;
        $this->studentID = $studentID;
    }

    public function getName() {
        return $this->name;
    }
    public function getStudentID() {
        return $this->studentID;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}
$siswa = new Student("Khidir", "23014");

echo $siswa->getName();
echo "<br>";
echo $siswa->getStudentID();