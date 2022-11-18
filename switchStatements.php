<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switchStatements.php" method="POST">
        Enter Grade <input type="text" name="grade">

        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        echo "your grade is $grade <br>"; 
        switch($grade){
            case "A":
                echo "You did awesome"; 
                break;
            case "B":
                echo "You did okay"; 
                break;
            case "C":
                echo "You did MEH"; 
                break;
            case "D":
                echo "You did POOR"; 
                break;
            case "F":
                echo "failtu"; 
                break;
            default:
                echo "invalid grade";
                

                
        }
    ?>
</body>
</html>