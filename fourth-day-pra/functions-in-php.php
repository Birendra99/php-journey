<?php
 // Function is a block of code used for a specific reason and also can reuse multiple times.
 // types of functions:
 // User Defined Fnction
 // Inbuilt Functions

// In functions:
// Simple Function
// Returning Value Function
// Anonymous Function
// Parameterize Functions
// Variable Function

function heading(){
    echo "----------->User Details<---------- <br/>";
}

function print_details(){
    heading();
    echo "User Name: Sam";
    echo "<br/>";
    echo "User Location: London. <br/>";
}

print_details();
print_details();



?>