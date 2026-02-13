<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table For Practise</title>
</head>
<body>

<!-- <table border="1">
     <tr>
        <td>S.No</td>
        <td>Name</td>
        <td>Address</td>
        <td>Age</td>
     </tr>
     <tr>
        <td>1</td>
        <td>Sam</td>
        <td>Shankmul</td>
        <td>25</td>
     </tr>
    <tr>
        <td>2</td>
        <td>Hari</td>
        <td>Buddhnagar</td>
        <td>20</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Sita</td>
        <td>New Baneshwor</td>
        <td>30</td>
    </tr>
    

</table> -->

<?php
  $users=[
  [1,"Ram","Shankmul",24],
  [2,"Jack","Buddhanagr",25],
  [3,"Rita","New Baneswor",22],
  [4,"Gita","chabahil",27]
  ];

  echo "<table border=1>";

  for($a=0; $a<count($users); $a++){
    echo "<tr>";

    for($b=0; $b<count($users[$a]);$b++){
        echo "<td>";
        echo $users[$a][$b]. " ";
        echo "</td>";
        
    }
    echo "</tr>";
    // echo "<br/>";
  }
  echo "</table>";

?>


    
</body>
</html>