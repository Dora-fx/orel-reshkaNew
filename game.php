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
    <form action="<?php

        if (isset($_POST["counter"])) {
            $counter = $_POST["counter"];
            $counter += 1;
            $keepResultWin = $_POST["Win"];
            $keepResultLoose = $_POST["Loose"];
        } else {
            $counter = 0;
            $keepResultWin = 0;
            $keepResultLoose = 0;
        }
        $action = "";
        if ($counter == 10) {
            $action = "result.php";
        } else {
            $action = "game.php";
        }
        echo ($action);

    ?>" method="POST">
        
        <label><input value="<?= $_POST["level"] ?>" name="level" type="hidden"></label>
        <label><input value="<?= $_POST["levelBlocker"] ?>" name="levelBlocker" type="hidden"></label>

        <?php 
            
    
            $level = $_POST["level"];
            $gameResult = "";
            
            if (isset($_POST["chouse"])) {
                $chouse = $_POST["chouse"];
                $result = rand(0,2);
                echo ("<p>Level: $level</p>");
                
                

                switch ($level) {
                    case "easy":
                        if ($chouse == $result || $result == "2") {
                            $gameResult = "Win";
                            echo ("<p>Win</p>");
                        } else {
                            $gameResult = "Loose";
                            echo ("<p>Loose</p>");
                        }
                        break;
                    case "medium":
                        $result = rand(0,1);
                        if ($chouse == $result) {
                            $gameResult = "Win";
                            echo ("<p>Win</p>");
                        } else {
                            $gameResult = "Loose";
                            echo ("<p>Loose</p>");
                        }
                        break;
                    default:
                        if ($chouse != $result || $result == "2") {
                            $gameResult = "Loose";
                            echo ("<p>Loose</p>");
                        } else {
                            $gameResult = "Win";
                            echo ("<p>Win</p>");
                        }
                }
            }

            if ($gameResult == "Win") {
                $keepResultWin += 1;
                if ($chouse == "0") {
                    echo ("<p>Orel</p>");
                } else {
                    echo ("<p>Reshka</p>");
                }
            } else if ($gameResult == "Loose") {
                $keepResultLoose += 1;
                if ($chouse !== "1") {
                    echo ("<p>Reshka</p>");
                } else {
                    echo ("<p>Orel</p>");
                }
            }
            echo ('
                <label><input value="' .$keepResultWin. '" name="Win" type="hidden"></label>
                <label><input value="' .$keepResultLoose. '" name="Loose" type="hidden"></label>
                <label><input name="counter" value="' .$counter. '" type="number" readonly></label>
            ');
            if ($counter < 10) {
                echo ('
                    <p><label><button value="0" name="chouse" type="submit">Orel</button></label></p>
                    <p><label><button value="1" name="chouse" type="submit">Reshka</button></label></p>
                ');
            } else {
                echo ('
                    <label><button type="submit">Results</button></label>
                ');
            }
            
        ?>
    </form>
</body>
</html>