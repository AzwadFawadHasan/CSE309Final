<?php 



?>


<h1>
    <?php 
        echo $headings;
    ?>

</h1>


<?php 
        foreach($listings as $value):

?>

<h2>
    <?php
        echo $value['title'];
    ?>
</h2>

<p>
    <?php
        echo $value['description'];
    ?>
</p>



<?php
        endforeach;

?>