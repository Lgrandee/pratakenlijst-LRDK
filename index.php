<!DOCTYPE html>
<html lang="nl">

<head>
    <title></title>
    <?php
    require_once('head.php');
    ?>
    
</head>

<body class="nav-open">
    <!-- sidebar -->    
    <?php
    require_once('header.php');
    ?>
    
    <!-- header -->
    <div class="container">
    </div>
    <main class="main"> 
            <button class="button" type="button" onclick="toggleNav()">
                <ion-icon name="menu-outline" size="large"></ion-icon>
            </button>            
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
