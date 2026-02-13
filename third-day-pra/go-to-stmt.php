<?php

$num=20;
echo "Before Jumping condition <br/>";

// if($num=20){
//     goto jump;
// }

if($num==23){
    goto jump;
}

$name="Sam";

echo "$name <br/>";

jump:
echo "Statement is jumped on line number 15 without printing name";

echo "<br/>";

?>

<?php

for($a=1; $a<=10; $a++){

    echo "$a <br/>";
    if($a==6){
        goto outsideLoop;
    }

}

outsideLoop:
echo "Only Printing the value of $a upto 6<br/>";


?>