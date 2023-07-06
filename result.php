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
        $keepResultWin = $_POST["Win"];
        $keepResultLoose = $_POST["Loose"];
        $levelBlocker = $_POST["levelBlocker"];
        $level = $_POST["level"];

        if ($keepResultWin > $keepResultLoose) {
            if ($levelBlocker == "two disabled") {
                $levelBlocker = "one disabled";
            } else if ($levelBlocker == "one disabled" && $level == "medium") {
                $levelBlocker = "";
            }
            echo ("Win");
        } else {
            echo ("Loose"); 
        }
    ?>    
    <form action="index.php" method="POST">
    <label><input value="<?= $levelBlocker ?>" name="levelBlocker" type="hidden"></label>
    <label><button type="submit">Try your luck</button></label>
    </form>

</body>
</html>