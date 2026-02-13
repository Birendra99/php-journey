<?php

$h3_color="gray";

echo "<h1 style='color:green' > Php with Html</h1>";
echo "<br/>";
echo "<h1 style='color: red'>Php stands for Hypertext Preprocessor</h1>";

?>

<?php

$name="Hypertext Preprocessor";

echo "<h1 style='color: orange'> $name</h1>";

?>

<h1> The simplest language to build website is :<?php echo $name ?></h1>


<h3 style="color:<?php echo $h3_color; ?>">  <?php echo $name;?></h3>


<h3 style="color: <?php echo $h3_color;?>"> <?php echo $name;?></h3>