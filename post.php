<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="POST">
        
        PASSWORD: <input type="password" name="password"><br>

        <input type="submit">

</form>
<?php 
$passwordVariable = $_POST["password"];
echo "your password is $passwordVariable";
?>
</body>
</html>