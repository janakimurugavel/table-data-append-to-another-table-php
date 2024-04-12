<?php
include "db.php";
$result = mysqli_query($conn,"SELECT * FROM child"); 
$i=1;
while($row = mysqli_fetch_assoc($result)) {
  
    $sql_insert =$conn->query("INSERT INTO `parent`(`name`,`age`,`place`) VALUES ('".$row['name']."','".$row['age']."','".$row['place']."' )");
        echo $i.' '."Record inserted successfully";
   
$i++;
}

?>