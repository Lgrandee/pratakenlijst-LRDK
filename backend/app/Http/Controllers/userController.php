<?php
    $action = $_POST['action'];
    if ($action == 'update')
    {
    
    
        $id = $_POST['id'];
    
        //Variabelen vullen
        $attractie = $_POST['attractie'];
        $type = $_POST['type'];
        $capaciteit = $_POST['capaciteit'];
        $melder = $_POST['melder'];
        $prioriteit = isset($_POST['prioriteit']) ? 1 : 0;
        $otherinfo = $_POST['otherinfo'];
    
        $msg = "Je melding is bijgewerkt, bedankt!";
        header("location: ../../../resources/views/meldingen/index.php?msg=$msg");
    
        $reportCard = $capaciteit . " / " . $melder . " / " . $prioriteit . " / " . $otherinfo;
    
        //1. Verbinding
        require_once '../../../conn.php';

    
        //2. Query
        $query = "UPDATE meldingen SET capaciteit = :capaciteit, melder = :melder, prioriteit = :prioriteit, otherinfo = :otherinfo WHERE id = :id";
    
        
        //3. Prepare
        $statement = $conn->prepare($query);
    
        //4. Execute
        $statement->execute([
            ":id"           => $id,
            ":capaciteit"   => $capaciteit,
            ":melder"       => $melder,
            ":prioriteit"   => $prioriteit,
            ":otherinfo"   => $otherinfo
        ]);
    }
    if ($action == "login"){

        $gebruikersnaam = $_POST['username'];
        $wachtwoord = $_POST['password'];
        $email = $_POST['email'];


        require_once '../../../conn.php';

        $query = "SELECT * FROM users WHERE username = :username AND email = :email";
        $statement = $conn->prepare($query);
        $statement->execute([":username" => $gebruikersnaam, ":email" => $email ]);
        $user = $statement->fetch();

        $msg = $gebruikersnaam; 
        $errmsg = "Inloggen mislukt. Controleer uw gebruikersnaam, wachtwoord en email.";
        if ($user && password_verify($wachtwoord, $user['password']) && $user['email'] == $email) {
            $_SESSION['username'] = $gebruikersnaam;
            $_SESSION['naam'] = $user['naam'];
            $_SESSION['achternaam'] = $user['achternaam'];
            $_SESSION['email'] = $email;
            $_SESSION['afdeling'] = $user['afdeling'];
            
            header("Location: ../../../../userAccount.php?msg=$msg");
            exit;
        } else {
            // Login failed
            header("Location: ../../../../registratie/inloggen/index.php?msg=$errmsg");
            exit; 
        }
    }




    if ($action == "register"){
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $afdeling = $_POST['afdeling'];

    // Backend validation
    // if (empty($naam) || empty($achternaam) || empty($username) || empty($password) || empty($email) || empty($afdeling)) {
    //     $msg = "Vul alle velden in om te registreren.";
    //     header("location:");
    //     exit;
    // }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // $msg = "Uw account is succesvol geregistreerd.";

    require_once '../../../conn.php';

    $query = "INSERT INTO users (naam, achternaam, username, password, email, afdeling) VALUES (:naam, :achternaam, :username, :password, :email, :afdeling)";

    $statement = $conn->prepare($query);

    $statement->execute([
        ":naam" => $naam,
        ":achternaam" => $achternaam,
        ":username" => $username,
        ":password" => $hashed_password,
        ":email" => $email,
        ":afdeling" => $afdeling
    ]);
    }

?>