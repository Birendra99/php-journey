<?php 

// in nested function first parent must be called then child functions are worked otherwies it caught an error.


function test1(){
    echo "Parent functions is called.<br/>";

    function test2(){
        echo "Child Function of test1<br/>";
    }
}

test1();
test2();


?>