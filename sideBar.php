<?php
    require_once("backend/config.php");
?>

<header>
    <nav class="nav">
        <button type="button" class="nav-close" onclick="toggleNav()">
            <ion-icon name="close-outline" size="large"></ion-icon>
        </button>
        <div class="nav-links-container">
            <a href="<?php echo $base_url; ?>" class="nav-link">
                <span class="nav-text">Homepage</span>
                <i class="fa-solid fa-house"></i>
            </a>

            <?php if (!isset($_SESSION['email'])) { ?>
                <!-- Laat deze zien als niet ingelogd -->
                <div class="login">
                    <a href="login.php" class="nav-link">
                        <span class="nav-text">Inloggen</span>
                        <img src="img/icons/key.png" alt="">
                    </a>
                </div>

                <div class="add">
                    <a href="register.php" class="nav-link">
                        <span class="nav-text">Registreren</span>
                        <img src="img/icons/add.png" alt="">
                    </a>
                </div>
            <?php } else { ?>
                <div class="account">
                    <a href="userAccount.php" class="nav-link">
                        <span class="nav-text">Uw account</span>
                        <img src="img/icons/customer.png" alt="">
                    </a>
                </div>

                <div class="edit">
                    <a href="userAccountEdit.php" class="nav-link">
                        <span class="nav-text">Bewerk account</span>
                        <img src="img/icons/wrench.png" alt="">
                    </a>
                </div>

                <div class="notes">
                    <a href="" class="nav-link">
                        <span class="nav-text">Taken</span>
                        <img src="img/icons/noteAdd.png" alt="taken">
                    </a>
                </div>

                <div class="notes">
                    <a href="taskview.php" class="nav-link">
                        <span class="nav-text">Takenoverzicht</span>
                        <img src="img/icons/note.png" alt="">
                    </a>
                </div>

            <?php } ?>
        </div>
    </nav>
</header>
<main class="main"> 
    <button class="button" type="button" onclick="toggleNav()">
        <ion-icon name="menu-outline" size="large"></ion-icon>
    </button>            
</main>

