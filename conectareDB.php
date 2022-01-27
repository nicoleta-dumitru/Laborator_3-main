<?php

$dbUsername="root";
$dbPassword="";
$hostName="localhost";
$dbName="lab3";
$dbPort=3307;
$con=mysqli_connect($hostName,$dbUsername,$dbPassword,$dbName, $dbPort);

if(!$con){
    $string = "Nu se poate conecta";
    echo ("<script>console.log('".$string."');</script>");
    die();
}
else{
    $string = "Reusit !";
    echo ("<script>console.log('".$string."');</script>");
}



?>

