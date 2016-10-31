<?php  
 //delete.php  
 $connection = mysqli_connect("localhost", "root", "", "pbp_a_tts_672014113");
 
 $sql = "INSERT INTO tbl_tweet (tweet) VALUES ('".$_POST["tweet"]."')";
 mysqli_query($connection, $sql);  
 ?>  