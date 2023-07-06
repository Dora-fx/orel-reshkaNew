<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
        $levelBlocker = "two disabled";
        if (isset($_POST["levelBlocker"])) {
            $levelBlocker = $_POST["levelBlocker"];
        }
    ?>
    <form action="game.php" method="POST">
        <h1>Chouse level</h1>
        <label><input type="hidden" name="levelBlocker" value="<?= $levelBlocker ?>"></label>
        <label><input name="level" value="easy" type="radio" checked>Easy</label>
        <label><input name="level" value="medium" type="radio" <?= ($levelBlocker == "two disabled") ? "disabled" : "" ?>>Medium</label>
        <label><input name="level" value="hard" type="radio" <?= ($levelBlocker == "two disabled" || $levelBlocker == "one disabled") ? "disabled" : "" ?>>Hard</label>
        <p><label><input value="Start" type="submit"></label></p> 
    </form> 
</body>
</html>