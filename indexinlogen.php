<!DOCTYPE html>
<html lang="nl">

<!-- <head>
<title>inlogen</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
<script src="../java/java.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/37c1abe005.js" crossorigin="anonymous"></script> -->
<head>
    <?php
        require_once('head.php');
    ?>
</head>

<body class="nav-open">
    <!-- sidebar --> 
<?php
    require_once('sidebar.php');
?>

    <?php
    require_once('header.php');
    ?>
<!--login-->

<div class="inloggen">
    <div class="wrapper">
        <h1>Inloggen</h1>
        <form action="<?php echo $base_url; ?>backend\app\Http\Controllers\registreren.php" method="POST">
                <input type="hidden" name="action" value="login">
        <div class="form-group">                 
            <label for="attractie">User name</label>                 
            <input type="text" name="username" id="username" class="form-input">             
        </div>
            <div class="form-group">
                <label for="capaciteit">Email</label>
                <input type="email" name="email" id="email" class="form-input">
            </div>
            <div class="form-group">
                <label for="melder">Wachtwoord</label>
                <input type="text" name="wachtwoord" id="wachtwoord" class="form-input">
            </div>
            <input type="submit" value="Verstuur melding">

        </form>

    </div>
</div>
      
<!-- footer -->
<footer class="Footer">
<?php
require_once('footer.php');
?>
</footer>
        <!-- footer -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>

</html>