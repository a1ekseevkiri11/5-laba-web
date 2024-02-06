<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "reviews";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connection_error){
    die($conn->conection_error);
}

// $sql = "INSERT INTO review (name,comment) VALUES ('Петя', 'Я гей')";

if($conn->query($sql) === true){
    echo("Всё чики-пуки");
}
else{
    echo $conn->error;
}

$conn->close();
?>
