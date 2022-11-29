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
        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating){
                $this->title=$title;
                $this->setRating($rating);

            }

            function getRating(){
                echo $this->rating;
            }
            function setRating($rating){
                if($rating !="unRated"){
                    $this->rating="NotRated";
                }
                else{
                    $this->rating=$rating;
                }
                
            }
        }

        $batman = new Movie("The Batman", "dadg");
        //$batman->setRating("unRated");
        $batman->getRating();
        
    ?>
</body>
</html>