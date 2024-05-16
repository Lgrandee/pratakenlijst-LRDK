<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taken</title>
    <?php require_once("head.php"); ?>
</head>
<header>
    <?php require_once("header.php"); ?>
</header>
<body>

<div class="task_container">

    <?php 
        require_once("backend/conn.php");
        $querytodo = "SELECT * FROM taken WHERE status = 'todo'";
        $statement = $conn->prepare($querytodo);
        $statement->execute();
        $takentodo = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="todo">
        <h2>To Do</h2>
        <div class="todo">
            <?php foreach($takentodo as $taak): ?>
                <div class="cardTask">
                    <div class="title">
                        <h1><?php echo $taak['titel']; ?></h1>
                    </div>

                    <div class="information">
                        <div class="tasksContainer">
                            <div class="dividerTask">
                                <p style="font-weight:bold;">Afdeling</p>
                                <p><?php echo $taak['afdeling']; ?></p>
                            </div>
                            <div class="dividerTask">
                                <p style="font-weight:bold;">Deadline</p>
                                <p><?php echo $taak['deadline']; ?></p>
                            </div>
                            <div class="dividerTask">
                                <p style="font-weight:bold;">Gebruiker</p>
                                <p><?php echo $taak['user']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="doing">
        <?php 
            require_once("backend/conn.php");
            $querydoing = "SELECT * FROM taken WHERE status = 'todo'";
            $statement = $conn->prepare($querydoing);
            $statement->execute();
            $takendoing = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="doing">
            <h2>Doing</h2>
            <div class="doing">
                <?php foreach($takendoing as $taak): ?>
                    <div class="cardTask">
                        <div class="title">
                            <h1><?php echo $taak['titel']; ?></h1>
                        </div>

                        <div class="information">
                            <div class="tasksContainer">
                                <div class="dividerTask">
                                    <p style="font-weight:bold;">Afdeling</p>
                                    <p><?php echo $taak['afdeling']; ?></p>
                                </div>
                                <div class="dividerTask">
                                    <p style="font-weight:bold;">Deadline</p>
                                    <p><?php echo $taak['deadline']; ?></p>
                                </div>
                                <div class="dividerTask">
                                    <p style="font-weight:bold;">Gebruiker</p>
                                    <p><?php echo $taak['user']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <div class="done">
        <?php 
            require_once("backend/conn.php");
            $querydone = "SELECT * FROM taken WHERE status = 'todo'";
            $statement = $conn->prepare($querydone);
            $statement->execute();
            $takendone = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="done">
            <h2>Done</h2>
            <div class="done">
                <?php foreach($takendone as $taak): ?>
                    <div class="cardTask">
                        <div class="title">
                            <h1><?php echo $taak['titel']; ?></h1>
                        </div>

                        <div class="information">
                            <div class="tasksContainer">
                                <div class="dividerTask">
                                    <p style="font-weight:bold;">Afdeling</p>
                                    <p><?php echo $taak['afdeling']; ?></p>
                                </div>
                                <div class="dividerTask">
                                    <p style="font-weight:bold;">Deadline</p>
                                    <p><?php echo $taak['deadline']; ?></p>
                                </div>
                                <div class="dividerTask">
                                    <p style="font-weight:bold;">Gebruiker</p>
                                    <p><?php echo $taak['user']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
</body>
<footer class="Footer">
    <?php require_once("footer.php"); ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</footer>
</html>
