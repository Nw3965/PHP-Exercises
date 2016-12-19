<?php
// Human class
class human {
public $name ;
public $height;
public $weight;
function show (){
echo "{this->name}s height is {this->height}cm, Weight is {this->weight}kg <br>";
}
}

//$taro instance
$taro = new Human ();
$taro ->name ='Taro';
$taro ->height= 174;
$taro ->weight= 70;
$taro ->show ();

//$hanako instance
$hanako = new Human ();
$hanako ->name = 'Hanako';
$hanako ->height = 158;
$hanako ->weight = 50;
$hanako ->show ();
?>

 
