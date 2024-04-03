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
                <p>Aanpassen</p>
            </div>
            <a href="">uitloggen</a>
        </div>
        <div class="bodyContainer">
            <div class="userInformationBox">
                <h3>Uw informatie</h3>
                <div class="informationContainer">
                    <form action="userAccount.php"> <!-- Moet gelinked worden met controller -->
                        <div class="formGroupEdit">
                            <label for="naam">Naam:</label>
                            <input type="text" name="naam" id="naam" class="form-input" value="Armani van Rijswijk<?php //echo ($user['naam']);?>"> <!-- Moet gelinked worden met controller, informatie van user na inloggen -->
                        </div>
                        <div class="formGroupEdit">
                            <label for="gebruikersnaam">Gebruikersnaam:</label>
                            <input type="text" name="gebruikersnaam" id="gebruikersnaam" class="form-input" value="Armanivr<?php //echo ($user['gebruikersnaam']);?>"> <!-- Moet gelinked worden met controller, informatie van user na inloggen -->
                        </div>
                        <div class="formGroupEdit">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-input" value="armanvrijswijk@gmail.com<?php //echo ($user['gebruikersnaam']);?>"> <!-- Moet gelinked worden met controller, informatie van user na inloggen -->
                        </div>
                        <div class="formGroupEdit">
                            <label for="afdeling">Afdeling:</label>
                            <input type="text" name="afdeling" id="afdeling" class="form-input" value="Webdevelopment<?php //echo ($user['gebruikersnaam']);?>"> <!-- Moet gelinked worden met controller, informatie van user na inloggen -->
                        </div>
                        <input type="submit" class="confirmButton" value="Bevestig">
                    </form>
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
                        <img src="img/icons/ForwardArrow.png" alt="forwardArrow"> <!-- Placeholder Link -->
                        <a href=".php">Link</a>
                    </div>
                    <div class="linkGroup">
                        <img src="img/icons/ForwardArrow.png" alt="forwardArrow"> <!-- Placeholder Link -->
                        <a href=".php">Link</a>
                    </div>
                    <div class="linkGroup">
                        <img src="img/icons/ForwardArrow.png" alt="forwardArrow"> <!-- Placeholder Link -->
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