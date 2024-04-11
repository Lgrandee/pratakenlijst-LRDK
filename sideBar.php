<?php require_once 'backend/config.php'; ?>

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

            <div class="notes">
                <a href="<?php echo $base_url; ?>/taskview.php" class="nav-link">
                    <span class="nav-text">Takenoverzicht</span>
                    <img src="img/icons/note.png" alt="">
                </a>
            </div>

            <div class="login">
                <a href="<?php echo $base_url; ?>/indexinlogen.php" class="nav-link">
                    <span class="nav-text">Inloggen</span>
                    <img src="img/icons/key.png" alt="">
                </a>
            </div>

            <div class="add">
                <a href="<?php echo $base_url; ?>indexregistreren.php" class="nav-link">
                    <span class="nav-text">registreren</span>
                    <img src="img/icons/add.png" alt="">
                </a>
            </div>

            <div class="account">
                <a href="<?php echo $base_url; ?>/userAccount.php" class="nav-link">
                    <span class="nav-text">Uw account</span>
                    <img src="img/icons/customer.png" alt="">
                </a>
            </div>

            <div class="edit">
                <a href="<?php echo $base_url; ?>/userAccountEdit.php" class="nav-link">
                    <span class="nav-text">Edit account</span>
                    <img src="img/icons/wrench.png" alt="">
                </a>
            </div>
        </div>
    </nav>
</header>
<main class="main"> 
    <button class="button" type="button" onclick="toggleNav()">
        <ion-icon name="menu-outline" size="large"></ion-icon>
    </button>            
</main>

   

    
