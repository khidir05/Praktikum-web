<?php
class teacher {
    public function teacherID(person $person) {
        echo $person->getName() . $person->getStudentID();
    }
}

$guru = new student("Khidir");