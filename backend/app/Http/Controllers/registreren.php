<?php
$naam =$_POST['naam'];
$achternaam = $_POST['achternaam'];
$email =$_POST['email'];
$username= $_POST['username'];
$password= $_POST['password'];
$afdeling = $_POST['afdeling'];

require_once 'backend\config.php';

$query = "INSERT INTO users (naam, achternaam, email, username, `password`, afdeling)
VALUES (:naam, :achternaam, :email, :username, :password, :afdeling)";

$statement = $conn->prepare($query);

$statement->execute([
    ":naam" => $naam,
    ":achternaam" => $achternaam,
    ":email" => $email,
    ":username" => $username,
    ":password" => $password,
    ":afdeling" => $afdeling,
]);
