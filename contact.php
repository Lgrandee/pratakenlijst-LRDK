<!DOCTYPE html>
<html lang="nl">

<head>
    <title></title>
    <?php
    require_once('head.php');
    ?>
    
</head>

<body>
    <!-- sidebar -->    
    <?php
    require_once('header.php');
    ?>
    <div class="wrapper">
        <h1>Contact</h1>
        <div class="btn-group"> 
        Adres:
        <a href="https://www.google.com/maps/place/Curio,+Terheijdenseweg+350/@51.6046121,4.7886211,14z/data=!4m6!3m5!1s0x47c69f990d127d8b:0x1e825fb420ca913c!8m2!3d51.6066015!4d4.7782971!16s%2Fg%2F1hc5wxm8d?entry=ttu">
        <button class="button" onclick="https://www.google.com/maps/place/Curio,+Terheijdenseweg+350/@51.6046121,4.7886211,14z/data=!4m6!3m5!1s0x47c69f990d127d8b:0x1e825fb420ca913c!8m2!3d51.6066015!4d4.7782971!16s%2Fg%2F1hc5wxm8d?entry=ttu">  Terheijdenseweg 3504826 AA Breda</a></button><br />
        <p>
        Telefoon:<span itemprop="telephone"><a href="tel:+31 615657113"><button class="button" onclick="tel:+31 ;615657113">+088-209-8000</a></span></button>
        </p>
        <p>
        E-mail:
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@curio.nl"><button class="button" onclick="https://mail.google.com/mail/?view=cm&fs=1&to=info@curio.nl">info@curio.nl</a></button>
        </p>
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
<?php