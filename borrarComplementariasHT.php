<?php

include('db.php');
$con = $conexion;
$id=$_GET['idcomplementarias'];
$sql = "DELETE from complementariasht WHERE idcomplementarias='$id'";
$query = mysqli_query($con, $sql);

if ($query){
    echo "<script languaje='JavaScript'>
    alert('Registro eliminado');
    location.assign('complementariasHT.php');
    </script>";
};

?>