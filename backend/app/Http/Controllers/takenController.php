
<?php
require_once("../../backend/conn.php");
require_once("../../backend/app/Http/Controllers/registreren.php");

if ($action == "create")
{



    $query = "";
    
    $statement = $conn->prepare($query);
    
    $statement->execute();
    
    $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    
}


if ($action == "update")
{


    $query = "";
    
    $statement = $conn->prepare($query);
    
    $statement->execute();
    
    $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    
}

if ($action == "delete");
{


    $query = "";
    
    $statement = $conn->prepare($query);
    
    $statement->execute();
    
    $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    
}


?>