<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$database="gestabsence"; 
$con=new mysqli("$host","$username","$password","$database"); 
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

$sql = "SELECT * FROM users ";
$result = $mysqli -> query($sql);

$row = $result -> fetch_array(MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["prenom"], $row["nom"]);

$result -> free_result();

$mysqli -> close();

?>