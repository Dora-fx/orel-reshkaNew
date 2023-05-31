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
    <form action="game.php" method="POST">
        <?php
            $keepResultWin = $_POST["Win"];
            $keepResultLoose = $_POST["Loose"];
            $level = $_POST["level"];
            $buttonText = "Next Level";

            if ($keepResultWin > $keepResultLoose) {
                if ($level == "easy") {
                    $level = "medium";
                } else if ($level == "medium") {
                    $level = "hard";
                } else if ($level == "hard") {
                    $buttonText = "Go on";
                    echo ("!!!Congratulations!!!");
                }
                echo ("Win");
            } else {
                $buttonText = "Try again";
                echo ("Loose"); 
            }

            ?>    
      
      <label><button value="<?= $level ?>" name="level" type="submit"><?= $buttonText ?></button></label>
    </form>

</body>
</html>