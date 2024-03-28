<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once('head.php');
    ?>
    <title>Mijn Account</title>
</head>
<body class = "nav-open">
    <header>
        <?php
            require_once("header.php");
        ?>
    </header>
    <main class="main">
            <button class="button" type="button" onclick="toggleNav()">
                <ion-icon name="menu-outline" size="large"></ion-icon>
            </button> 
        <div class="wrapper">
            <div class="welcomeContainer">
                <h2>Welkom, <?php echo"gebruiker"?>
            </div>
        </div>
    </main>
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