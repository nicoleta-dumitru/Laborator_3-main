  
<?php


$nume_action = $_POST['nume_action'];
$prenume_action = $_POST['prenume_action'];
$localitate_action = $_POST['localitate_action'];


echo '<script type="text/javascript">alert("' . $nume_action . '")</script>';

require_once("conectareDB.php");
if (isset($_POST['submit'])) {
    $query = "INSERT INTO persoane (Nume,Prenume,Localitate) VALUES ('$nume_action','$prenume_action','$localitate_action')";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("location:index.php");
    } else {
        echo " can not insert into database";
    }
} else {
    header("location:index.php");
}


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    echo "<script> alert('" . $id . "')</script>";
    $name = $_POST['Nume'];
    $prenume = $_POST['Prenume'];
    $localitate = $_POST['Localitate'];
    echo $name, $prenume, $localitate;
    $query = "update persoane set Nume='" . $name . "',Prenume='" . $prenume . "',Localitate='" . $localitate . "' where id='" . $id . "'";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("location:index.php");
    } else {
        echo "can not update in database";
    }
} else {
    header("location:index.php");
}


if (isset($_GET['DelID'])) {
    $id = $_GET['DelID'];

    $query = "delete from persoane where id='" . $id . "'";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("location:index.php");
    } else {
        echo " can not delete this task";
    }
}
?>