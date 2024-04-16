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
    <div class="Logo_box">
        
     </div>
        <?php
            require_once("header.php");
        ?>
    </header>
    <main>
        <div class="topContainer">
            <div class="welcomeMessage">
                <h2>Welkom, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'SESSION NOT SET' ?></h2>
                <p>Uw Account</p>
            </div>
            <a href="logout.php">uitloggen</a>
        </div>
        <div class="bodyContainer">
            <div class="userInformationBox">
                <h3>Uw informatie</h3>
                <div class="mainInfo">
                    <div class="informationContainer">
                        <?php
                    
                        ?>
                        <p><span class="boldSpan">Naam:</span> <?php echo isset($_SESSION['naam']) ? $_SESSION['naam'] : 'SESSION NOT SET';  ?> <?php echo isset($_SESSION['achternaam']) ? $_SESSION['achternaam'] : 'SESSION NOT SET'; ?></p>
                        <p><span class="boldSpan">Gebruikersnaam:</span> <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'SESSION NOT SET'; ?></p>
                        <p><span class="boldSpan">Email:</span> <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'SESSION NOT SET'; ?></p>
                        <p><span class="boldSpan">Afdeling:</span> <?php echo isset($_SESSION['afdeling']) ? $_SESSION['afdeling'] : 'SESSION NOT SET'; ?><p>
                    </div>
                    <a href="userAccountEdit.php">Aanpassen</a>
                </div>
            </div>
            <div class="linksBox">
                <h3>Werk door</h3>
                <div class="linkList">
                    <div class="linkGroup">
                        <img src="img/icons/ForwardArrow.png" alt="forwardArrow">
                        <a href="index.php">Home</a>
                    </div>
                    <div class="linkGroup">
                        <img src="img/icons/ForwardArrow.png" alt="forwardArrow">
                        <a href="taskView.php">Takenoverzicht</a>
                    </div>
                    <div class="linkGroup">
                        <img src="img/icons/ForwardArrow.png" alt="forwardArrow">
                        <a href=".php">Link</a>
                    </div>
                    <div class="linkGroup">
                        <img src="img/icons/ForwardArrow.png" alt="forwardArrow">
                        <a href=".php">Link</a>
                    </div>
                    <div class="linkGroup">
                        <img src="img/icons/ForwardArrow.png" alt="forwardArrow">
                        <a href=".php">Link</a>
                    </div>
                </div>
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