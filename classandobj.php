<?php

class CarFactory{
    public $brand = 'bmw';
    public function Start(){
        echo 'car is running';
    }
}
$car2 = new CarFactory();
echo $car2->brand;
echo '<br>';
echo $car2->Start();

?>

<?php
class student {
    public $name = 'addy';
    public function study(){
        echo 'padh raha hoon bc';
    }
}
$student1 = new student();
$student1->name;
?>

<?php
class employee{
    public $attdance = 'full';
    public function feespay(){
        echo 'fees mil gaya';
    }
}
 $obj=   new employee();
 echo $obj->attdance;
 echo $obj->feespay();
?>