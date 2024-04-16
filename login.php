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
        <?php session_destroy();
            // var_dump($_SESSION);
        ?>
        
        <h1>Inloggen</h1>
        <form action="backend\app\Http\Controllers\userController.php" method="POST">
                <input type="hidden" name="action" value="login">
            <div class="form-group">                 
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>             
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Inloggen">

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