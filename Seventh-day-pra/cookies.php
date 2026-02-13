<?php
setcookie("fruit","Apple",time()+86400);
print_r($_COOKIE);
if(isset($_COOKIE['fruit'])){
    print_r($_COOKIE);
}
else{
    echo "no cookie set";
}
?>