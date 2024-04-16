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
                <h2>Welkom, <?php echo"gebruiker"?></h2>
                <p>Uw Account</p>
            </div>
            <a href="logout.php">uitloggen</a>
        </div>
        <div class="bodyContainer">
            <div class="userInformationBox">
                <h3>Uw informatie</h3>
                <div class="mainInfo">
                    <div class="informationContainer">
                    <form action="backend\app\Http\Controllers\userController.php" method="POST">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="id" value="<?= $user['id'];?>">
                        <div class="formGroupEdit">
                            <label for="naam"><span class="boldSpan">Naam:</span></label>
                            <input type="text" name="naam" id="naam" class="form-input" value="<?php echo isset($_SESSION['naam']) ? $_SESSION['naam'] : 'SESSION NOT SET'; ?>">
                        </div>
                        <div class="formGroupEdit">
                            <label for="gebruikersnaam"><span class="boldSpan">Gebruikersnaam:</span></label>
                            <input type="text" name="gebruikersnaam" id="gebruikersnaam" class="form-input" value="<?php echo isset($_SESSION['gebruikersnaam']) ? $_SESSION['gebruikersnaam'] : 'SESSION NOT SET'; ?>">

                        </div>
                        <div class="formGroupEdit">
                            <label for="email"><span class="boldSpan">Email:</span></label>
                            <input type="text" name="email" id="email" class="form-input" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'SESSION NOT SET'; ?>">
                        </div>
                        <div class="formGroupEdit">
                            <label for="afdeling"><span class="boldSpan">Afdeling:</span></label>
                            <input type="text" name="afdeling" id="afdeling" class="form-input" value="<?php echo isset($_SESSION['afdeling']) ? $_SESSION['afdeling'] : 'SESSION NOT SET'; ?>">
                        </div>
                        <input type="submit" class="confirmButton" value="Bevestig">
                        <a href="userAccount.php">Annuleren</a>
                    </form>
                    </div>
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