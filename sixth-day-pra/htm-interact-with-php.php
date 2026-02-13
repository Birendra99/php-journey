<?php
// --------->Types of Request <---------
// Get Request
// -> Get Request is visible in the address bar
// -> less Secure request
// --> Monstly used to get data from the server
// Post Request
// ->  Request is not visible in the address bar 
// -> Secure 
// -> Used For create and update operations on Server 

// Delete Request 
// Put/ Patch Request

echo '
<form action="" method="POST">
 <input type="text" name="name" placeholder="Enter Name"> <br/> <br/>
 <input type="password" name="password" placeholder="Enter Password"><br/> <br/>
 <input type="submit" name="Login" value="submit">
</form>
';
?>
