
<?php
require_once("../../backend/conn.php");
require_once("../../backend/app/Http/Controllers/registreren.php");


    $action = $_POST['action'];

if ($action == "create")
{

    $taak = $_POST['taak'];
    if(empty($taak))
    {
        $errors[] = "Vul het 'taak' veld in, alstublieft.";
    }

    $beschrijving = $_POST['beschrijvingT'];

    $afdeling = $_POST['afdeling'];
    if(empty($afdeling))
    {
        $errors[] = "Vul het 'afdeling' veld in, alstublieft.";
    }

    $deadline = $_POST['deadline'];

    $user = $_POST['user'];

    $created_at = $_POST['created_at'];

    require_once("../../../conn.php");

    $query = "SELECT * FROM taken";
    
    $statement = $conn->prepare($query);
    
    $statement->execute([]);
    
    $taken = $statement->fetchAll(PDO::FETCH_ASSOC);

    $msg = 'Uw taak is aangepast.';

    
}

// if ($action == "update")
// {
//     require_once("../../../conn.php");

//     $query = "";
    
//     $statement = $conn->prepare($query);
    
//     $statement->execute();
    
//     $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    
// }

// if ($action == "delete");
// {
//     require_once("../../../conn.php");

//     $query = "";
    
//     $statement = $conn->prepare($query);
    
//     $statement->execute();
    
//     $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    
// }


?>