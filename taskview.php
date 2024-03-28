<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head.php") ?>
    <title>Document</title>
</head>
<body>
    <main>
        <?php require_once("backend/conn.php"); ?>
        <table>
            <tr>
                <th>titel</th>
                <th>beschrijving</th>
                <th>afdeling</th>
                <th>status</th>
                <th>deadline</th>
                <th>user</th>
                <th>created_at</th>
            </tr>

            <?php 
                require_once("backend/config.php");
                $query2 = "SELECT * FROM taken WHERE NOT status = 'done'";
                $statement = $conn->prepare($query2);
                $statement->execute();
                $taken2 = $statement->fetchAll(PDO::FETCH_ASSOC);

            ?>


            <?php foreach($taken2 as $taak2): ?>

                <tr>
                    <td> <?php echo $taak2['titel']; ?> </td>
                    <td> <?php echo $taak2['beschrijving']; ?> </td>
                    <td> <?php echo $taak2['afdeling']; ?> </td>
                    <td> <?php echo $taak2['status']; ?> </td>
                    <td> <?php echo $taak2['deadline']; ?> </td>
                    <td> <?php echo $taak2['user']; ?> </td>
                    <td> <?php echo $taak2['created_at']; ?> </td>

                </tr>

            <?php endforeach;?>
        </table>
    </main>
</body>
</html>