<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($gameResult == "Win") {
        if ($chouse == "0") {
            echo ("Orel");
        } else {
            echo ("Reshka");
        }
    } else if ($gameResult == "Loose") {
        if ($chouse !== "1") {
            echo ("Reshka");
        } else {
            echo ("Orel");
        }
    
    }
?>    

</body>
</html>