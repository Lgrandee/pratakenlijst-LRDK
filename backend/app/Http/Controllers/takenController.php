
<?php

if ($action == "create")
{
    require_once("../../../conn.php");

    $query = ""
    
    $statement = $conn->prepare($query)
    
    $statement->execute()
    
    $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    
}


if ($action == "update")
{
    require_once("../../../conn.php");

    $query = "";
    
    $statement = $conn->prepare($query);
    
    $statement->execute();
    
    $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    
}

if ($action == "delete")
{
    require_once("../../../conn.php");

    $query = "";
    
    $statement = $conn->prepare($query);
    
    $statement->execute();
    
    $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    
}


?>