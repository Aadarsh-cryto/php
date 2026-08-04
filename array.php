<?php
$namesv= ['addy','ojha','isgreate'];
echo $namesv[0];
echo '<br>';
echo $namesv[2];
?>

<?php
$user = [
    "name" => "yukesh",
    "class" => "12th pass"
] ;

echo $user['name'];
?>

<?php
$biodata = [
    "class" => "12",
    "age" => "22",
    "nationality" => "indian"
];
echo $biodata["age"]
?>


<?php
$names = ['addy','kamlesh sir','youkesh'];

foreach($names as $name){
    echo "<br>";
    echo $name . "<br>";
}
?>

<?php
$keyandvalue = [
    "name" => "siddhi solutions",
    "starting year" => "2014",
    "howmanyyears" => 12 
];
foreach($keyandvalue as $key => $value){
    echo $key ." : ".$value . "<br>";
}
?>