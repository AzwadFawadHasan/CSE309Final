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

    function sayHi($name){
        echo "hellow $name<br>";
    }
    function sayHiAndAge($name, $age){
        echo "hellow $name , your age is $age<br>";
    }
    sayHiAndAge("heyMikey", 21);
    sayHi("hihi");
    sayHi("key");
    sayHi("ma");
    ?>
</body>
</html>