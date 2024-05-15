<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
        require_once("head.php");
    ?>
    <title>something and whatever</title>
</head>
<body>

<?php 
   require_once("backend/config.php");
   $query2 = "SELECT * FROM taken WHERE NOT status = 'done'";
   $statement = $conn->prepare($query2);
   $statement->execute();
   $taken2 = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="all">
        <?php foreach($taken2 as $taak2): ?>
    <div class="stylele">
        <div class="leftContainer">
            <h1><?php echo $taak2['titel']; ?></h1>
            <p><?php echo $taak2['beschrijving']; ?></p>
        </div>
        <div class="tasksContainer">
            <div class="dividerTask">
                <p class="exemption" class="titleTask" style="font-weight:bold;">Afdeling</p>
                <p><?php echo $taak2['afdeling']; ?></p>
            </div>
            <div class="dividerTask">
                <p class="titleTask" style="font-weight:bold;">Status</p>
                <p><?php echo $taak2['status']; ?></p>
            </div>
            <div class="exemption" class="dividerTask">
                <p class="titleTask" style="font-weight:bold;">Deadline</p>
                <p><?php echo $taak2['deadline']; ?></p>
            </div>
            <div class="dividerTask">
                <p class="titleTask" style="font-weight:bold;">Gebruiker</p>
                <p><?php echo $taak2['user']; ?></p>
            </div>
        </div>
    </div>
        <?php endforeach; ?>
</div>

</body>
</html>