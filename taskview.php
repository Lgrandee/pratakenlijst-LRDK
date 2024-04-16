<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head.php") ?>
    <title>Document</title>
    <?php
        if (isset($_SESSION['email'])) {
            // User is logged in
            // Add code here for logged in user
        } else {
            header("Location: registratie/inloggen/index.php");
            exit;
        }
    ?>  
</head>
    <body class="nav-open">
        <header>
            <?php require_once("header.php"); ?>
            <div class="Logo_box">

            </div>
        </header>
        <main>
            <?php require_once("backend/conn.php"); ?>
            <div class="wrapper">
                <div class="bigH">
                    <h1>Op deze pagina zie je <span class="S1">alle taken</span> die u nog moet doen!</h1>
                </div>
                <div class="tablele">
                            <?php require_once("card.php"); ?>

                </div>
            </div>
        </main>
        <div class="bigfoot">
            <!-- footer -->
            <footer class="Footer">
                <?php
                require_once('footer.php');
                ?>
            </footer>
            <!-- footer -->
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </div>
    </body>
</html>
