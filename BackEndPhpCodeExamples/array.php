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
    $friends = array("Kevin", "karen", 500 , "joker");
    echo $friends[3];
    echo "<br>";
    echo $friends[3]="azwad";
    echo "<br>";
    echo $friends[3];
    echo "<br>";
    echo $friends[4]="four";
    echo "<br>";
    echo count($friends);
    echo "<br>";
    echo $friends[10]="random";
    echo "<br>";
    echo count($friends);

    ?>
</body>
</html>