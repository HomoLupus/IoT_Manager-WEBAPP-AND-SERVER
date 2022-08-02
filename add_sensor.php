<?php
session_start();

if(!isset($_SESSION['logged_in'])){
 echo "sign in first!";
 exit();   
}


include("config/dbconfig.php");


$login = $_SESSION['user_login'];

$sql = "SELECT sensor_name, sensor_id FROM sensors WHERE user_login='$login'";

$sqlResult = $conn->query($sql);




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <?php require("components/header_logged_in.php"); ?>

    <div style="height: 57px;"></div>


    <?php 
        include "components/comp_add_sensor.php";
    ?>

    <?php require("components/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>