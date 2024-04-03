<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            <div class="reason">
                <h1><?php echo $taak2['titel']; ?></h1>
                <p><?php echo $taak2['beschrijving']; ?></p>
            </div>
            <p><?php echo $taak2['afdeling']; ?></p>
            <div class="stat">
                <p><?php echo $taak2['status']; ?></p>
            </div>
            <p><?php echo $taak2['deadline']; ?></p>
            <p><?php echo $taak2['user']; ?></p>
    </div>
        <?php endforeach; ?>
</div>

</body>
</html>