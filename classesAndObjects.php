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

    class Book {
        var $title;
        var $author;
        var $pages;
        function __construct($aTitle, $aAuthor, $aPages){
            echo "NEW Book Created<br>";
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages =$aPages;

        }
    }
    
    $book1 = new Book("Harry Potter","JK rowlikng",388);
    
    echo $book1->title;
    
    ?>
</body>
</html>