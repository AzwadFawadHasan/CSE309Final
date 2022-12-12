<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="POST">
        Apples: <input type="checkbox" name="fruit[]" value="apples"><br>
        oranges: <input type="checkbox" name="fruit[]" value="oranges"><br>
        papaya: <input type="checkbox" name="fruit[]" value="papaya"><br>
        <!--
            here [] means an array so that we can use multiple checkboxes
-->
        <input type="submit">


    </form>
    <?php
    $fruit = $_POST["fruit"];
    echo $fruit[0];
    
    ?>
</body>
</html>