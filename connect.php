<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "robot_movements";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}


if(isset($_POST['D']))
{
    $De = $_POST['D'];
}

$sql = "insert into movements (directions) values('$De')";
//echo '<br>';

if (mysqli_query($conn, $sql)){
    echo "$De";
} 
else {
    echo " Error: " .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>