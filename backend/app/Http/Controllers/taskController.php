
<?php
require_once("../../../conn.php");


    $action = $_POST['action'];

if ($action == "create")
{
    $titel = $_POST['taskName']; // Changed variable name from $taak to $titel
    if (empty($titel)) {
        $errors[] = "Vul het 'taak' veld in, alstublieft.";
    }

    $beschrijving = $_POST['taskDescription'];
    $deadline = $_POST['taskDeadline'];
    $afdeling = $_SESSION['afdeling'];
    $user = $_SESSION['username'];
    $created_at = date('Y-m-d H:i:s'); // Current system time

    require_once("../../../conn.php");

    if (empty($errors)) {
        $query = "INSERT INTO taken (titel, beschrijving, deadline, afdeling, user, created_at) VALUES (:titel, :beschrijving, :deadline, :afdeling, :user, :created_at)";
        $statement = $conn->prepare($query);
        $statement->execute([
            ':titel' => $titel, // Changed the key from ':taak' to ':titel'
            ':beschrijving' => $beschrijving,
            ':deadline' => $deadline,
            ':afdeling' => $afdeling,
            ':user' => $user,
            ':created_at' => $created_at
        ]);

        $msg = 'Uw taak is succesvol aangemaakt.';
    } else {
        $msg = 'Er zijn fouten in uw invoer.';
    }
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