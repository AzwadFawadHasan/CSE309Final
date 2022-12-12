<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="site2.php" method="get">
        Num1<input type="number" name="number1">
        <br>
        NUm2<input type="number" name="number2">
        <input type=submit><br>
    </form>
    <?php echo $_GET["number1"] + $_GET["number2"]; ?>
</body>
</html>
