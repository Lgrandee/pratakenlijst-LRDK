<!DOCTYPE html>
<html lang="nl">

<head>
    <title>inlogen</title>
    <?php
    require_once('head.php');
    ?>
    
</head>

<body class="nav-open">
    <!-- sidebar -->    
    <?php
    require_once('header.php');
    ?>
       <div class="container">
        <h1>Meldingen</h1>
        <a href="create.php">Nieuwe melding &gt;</a>

        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>

    <!-- <div style="height: 300px; background: #ededed; display: flex; justify-content: center; align-items: center; color: #666666;">(hier komen de storingsmeldingen)</div> -->
    <?php
        require_once'../../backend/conn.php';
        $query = "SELECT * FROM meldingen";
        $statement = $conn->prepare($query);
        $statement->execute();  
        $meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table>
            <tr>
                <th>Attractie</th>
                <th>Type</th>
                <th>Melder</th>
                <th>overige info</th>
                <th>prioriteit</th>
                <th>aanpassen</th>
            </tr>
            <?php foreach($meldingen as $melding): ?>
                <tr>
                    <td><?php echo $melding['attractie']; ?></td>
                    <td><?php echo $melding['type']; ?></td>
                    <td><?php echo $melding['melder']; ?></td>
                    <td><?php echo $melding['overige_info']; ?></td>
                    <td>
                        <?php if ($melding['prioriteit'] == 1) {
                            echo "Ja";
                        } else {
                            echo "Nee";
                        }
                        ?>
                    </td>
                    <td><a href="edit.php?id=<?php echo $melding['id']; ?>">aanpassen</a></td>
                </tr> 
            
            <?php endforeach; ?>    
        </table>
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