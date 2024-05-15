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
    <title>Taak Aanmaken</title>
</head>


<body >

    <?php
    require_once('header.php');
    ?>
<!--login form is gebruikt voor deze pagina om het makkelijk te maken.-->

<div class="taskcreate">
    <div class="wrapper">
        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>
        <h1>Taak Aanmaken | <?php echo $_SESSION['username']; ?></h1>
        <div class="taskForm">
            <form action="<?php echo $base_url; ?>/backend/app/Http/Controllers/taskController.php" method="POST">
                <input type="hidden" name="action" value="create">
                <div class="form-group">
                    <label for="taskName">Taaknaam</label>
                    <input type="text" name="taskName" id="taskName" class="form-input">
                </div>
                <div class="form-group">
                    <label for="taskDescription">Taakbeschrijving</label>
                    <textarea name="taskDescription" id="taskDescription" class="form-input"></textarea>
                </div>
                <div class="form-group">
                    <label for="taskDeadline">Deadline</label>
                    <input type="date" name="taskDeadline" id="taskDeadline" class="form-input">
                </div>
                <div class="form-group">
                    <input type="submit" value="Taak Aanmaken">
                </div>
            </form>
        </div

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