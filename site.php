

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
    $characterName= "john";
    $characterAge= 35;

    echo "<h1>hi</h1> <br>";
    echo "my name is $characterName";
    echo "<br> my age is $characterAge ";

    $characterName= "HeyMikey";
    echo "turning name to lower case ";
    echo strtolower($characterName);
    echo strtoupper($characterName);
    echo "<br> string length ";
    echo strlen($characterName);
    echo "<br> string index ";
    echo "$characterName[3]";
    echo "<br> changing character in characterName -> changing M to J <br>";
    $characterName[3]="J";
    echo "$characterName[3] <br>";
    echo "replacing strings using str_replace <br>";
    echo $characterName;
    echo "<br>";
    echo str_replace("HeyJikey", "HeyMikey", $characterName);

?>
</body>
</html>
