<?php
$naam =$_POST['naam'];
$achternaam = $_POST['achternaam'];
$email =$_POST['email'];
$username= $_POST['username'];
$password= $_POST['password'];

require_once '../../../config.example.php';

$query = "INSERT INTO users (naam, achternaam, email, username, `password`)
VALUES (:naam, :achternaam, :email, :username, :password)";

$statement = $conn->prepare($query);

$statement->execute([
    ":naam" => $naam,
    ":achternaam" => $achternaam,
    ":email" => $email,
    ":username" => $username,
    ":password" => $password,
]);
?>