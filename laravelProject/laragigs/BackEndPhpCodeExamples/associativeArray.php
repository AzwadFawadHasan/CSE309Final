<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associativeArray.php" method="POST">
        <input type="text" name="student">

        <input type="submit">
    </form>
    <!--Associative array can store two pieces of data togeteher-->
    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        //here key is JIM values is A+
        //here keys must be unique
        echo $grades["Pam"];
        echo "will tell us how many key mappings we have in grades variable <br>";
        echo count($grades);
        echo "<br>";
        
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>