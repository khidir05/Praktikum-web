<?php
class printer {
    public function print(animal $animal) {
        echo $animal->getName() . "says" . $animal->makesound () . "<br>";
    }
}

$dog = new dog ("Buddy");
$cat = new cat ("kitty");

$printer->print($dog);
$printer->print($cat);