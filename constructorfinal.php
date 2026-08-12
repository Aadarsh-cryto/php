<?php
class Student{

    public $name;
    public function __construct($name){
        $this->name =$name;
    }
    public function show(){
        echo $this->name;
    }
}
 $obj= new Student('rahul');
 $obj->show();
 

?>
<?php
class school{
    public $teachername;
    public function __construct($teachername){
        $this->teachername = $teachername;
    }
    public function show(){
echo $this->teachername;
    }
}
$teacher1 = new school('kkk');
$teacher1->show();

?>
<?php

 class field{
    public $whichfield;
    public function __construct($whichfield){
        $this->whichfield = $whichfield;
    }
    public function show(){
        echo $this->whichfield;
    }
 }
 $obj = new field('cse');
 $obj->show();
?>

<?php
class employee{
    public $name;
    public $salary;
    public function __construct($name,$salary){
        $this->name = $name;
        $this->salary=$salary;
    }
    public function show(){
        echo $this->name;
        echo $this->salary;
    }
}
$obj = new employee('rahul',22000);
$obj->show();

?>

<?php
class bankAccount{
    public $accountholdername;

    
    public $balance;
    public function __construct($accountholdername,$balance){
        $this->accountholdername = $accountholdername;
        $this->balance = $balance;
    }
  public function show(){
    echo $this->accountholdername;
    echo $this->balance;
  }
}
$obj = new bankAccount('rahul',2200000);
$obj->show();
?>

<?php
class professor{
    public $professorname;
    public function __construct($professorname){
   $this->professorname = $professorname;
    }
    public function show(){
        echo $this->professorname;
    }

}
$obj = new professor('janjir');
$obj->show();

?>
<?php
class headquarters{
    public $numofheadq;
    public function __construct($numofheadq){
        $this->numofheadq = $numofheadq;
    }
    public function show(){
        echo $this->numofheadq;
    }
}
$obj = new headquarters(23);
$obj->show();
?>