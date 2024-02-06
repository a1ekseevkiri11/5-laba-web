<?php
if (isset($_POST["name"]) && isset($_POST["comment"])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reviews";
    
    $conn = new mysqli($server, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }
    
    $name = $conn->real_escape_string($_POST["name"]);
    
    if($name === ""){
        $name = "Anonimus";
    }
    $comment = $conn->real_escape_string($_POST["comment"]);
    if($comment === ""){
        ex($conn);
    }
    $sql = "INSERT INTO review (name, comment) VALUES ('$name', '$comment')";
    if (!$conn->query($sql)) {
        ex($conn);
    }
    ex($conn);
}


function ex($conn)
{
    $conn->close();
    header("Location: http://localhost");
    exit;
}

