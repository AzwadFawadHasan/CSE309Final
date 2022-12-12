<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="madlibGame.php" method="GET">
        Color:<input type="text" name="color"><br>
        pruralNoun:<input type="text" name="pruralNoun"><br>
        celebrity:<input type="text" name="celebrity"><br>

    <input type="submit">
    </form>
    
   
    <?php  
    
    $color = $_GET["color"];
    $pruralNoun = $_GET["pruralNoun"];
    $celebrity = $_GET["celebrity"];
    echo "Roses are $color <br>";
    echo "$pruralNoun are blue <br>";
    echo "I love  $celebrity <br>"; ?>

</body>
</html>
