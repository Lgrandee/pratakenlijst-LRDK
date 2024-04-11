<?php require_once '../backend/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../backend/config.example.php'; ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $base_url; ?>../css/normalize.css">
<link rel="stylesheet" href="<?php echo $base_url; ?>../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<script src="./java/java.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/37c1abe005.js" crossorigin="anonymous"></script>


</head>

<body>
        <header>
        <div class="header_flex">
        <?php
            require_once('../sideBar.php');
        ?>   
        <div class="Logo_box">
            <img src="../img/logo-big-outlines-only.png" alt="Logo"> 
        </div>
    
    </div>  
        </header>


    <div class="container">
        <h1>Nieuwe taak</h1>

        <form action="../backend/app/Http/Controllers/takenController.php" method="POST">
            <input type="hidden" name="action" value="create">
            <div class="form-group">
                <label for="taak">Naam:</label>
                <input type="text" name="taak" id="taak" class="form-input" required>
            </div>

            <label for="beschrijving">beschrijving:</label>
            <textarea name="beschrijvingT" id="beschrijvingT" cols="30" rows="10" placeholder="Beschrijving..."></textarea>

            <div class="form-group">
                <label for="afdeling">afdeling:</label>
                <select name="afdeling" id="afdeling" required> 
                <option value="">selecteer uw afdeling</option>
                <option value="achtbaan">A-1</option>
                <option value="draaiend">A-2a</option>
                <option value="kinder">A-2b</option>
                <option value="horeca">B-1</option>
                <option value="show">H-3</option>
                <option value="water">H-5</option>
                <option value="overig...">andere afdeling</option></select>

            </div>
            <div class="form-group">
                <label for="deadline">deadline:</label>
                <input type="date" min="0" name="deadline" id="deadline" class="form-input">
            </div>
            
            <div class="form-group">
            <label for="user">user naam of code:</label>
            <input type="text" name="user" placeholder="naam of werknemer code" required>
            
            </div>

            
            <div class="form-group">
                <label for="created_at">Created at:</label>
                <input type="time" name="created_at" id="created_at" class="form-input">
            </div>



            <input type="submit" value="maak taak aan">

        </form>
    </div>

    <footer>
        <?php require_once '../footer.php'; ?>
    </footer>

</body>

</html>
