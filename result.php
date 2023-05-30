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
        var_dump($_POST);
        $keepResultWin = $_POST["Win"];
        $keepResultLoose = $_POST["Loose"];

        if ($keepResultWin > $keepResultLoose) {
            echo ("Win");
        } else {
            echo ("Loose"); 
        }
    ?>    
    <form action="" method="POST"></form>

</body>
</html>