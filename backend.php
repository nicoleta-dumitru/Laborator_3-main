<?php

$nume_action = $_POST['nume_action'];
$prenume_action = $_POST['prenume_action'];
$localitate_action = $_POST['localitate_action'];
require_once('conectareDB.php');

if (isset($_POST['submit'])) {
    $query = "INSERT INTO persoane(Nume,Prenume,Localitate) VALUES ('$nume_action', '$prenume_action', '$localitate_action')";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("location:index.php");
    } else {
        echo "Can not insert into database";
    }
} else {
    header("location:index.php");
}


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    echo "<script> alert('" . $id . "')</script>";
    $Nume = $_POST['input_field'];
    echo "$name";

    $Prenume = $_POST['input_field'];
    echo "$Prenume";

    $Localitate = $_POST['input_field'];
    echo "$Localitate";

    $query = "UPDATE persoane set Nume='" . $Nume . "' Prenume ='" . $Prenume . "' Localitate='" . $Localitate . "' where id='" . $id . "'";
    $result = mysqli_query($cont, $query);

    if ($result) {
        header("location:index.php");
    } else {
        echo "Can not update in database";
    }
} else {
    header("location:index.php");
}



if (isset($_GET['DelID'])) {
    $id = $_GET['DelId'];

    $query = "DELETE FROM persoane where id = '" . $id . "'";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("location:index.php");
    } else {
        echo "Can not delete this task";
    }
}
