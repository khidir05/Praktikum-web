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
abstract class Course {
    protected $courseName;
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }
    abstract public function getCourseDetails();

}
class onlineCourse extends Course {
    public function getCourseDetails() {
        return $this->courseName;
    }
}
class offlineCourse extends Course {
    public function getCourseDetails() {
        return $this->courseName;
    }
}

$daring = new onlineCourse("Setiap hari sabtu");
echo "Kursus daring murah, " . $daring->getCourseDetails()  . " disini <br>";

$laring = new offlineCourse("Setiap hari Minggu");
echo "Kursus laring murang ". $laring->getCourseDetails();
