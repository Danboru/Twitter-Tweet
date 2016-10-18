<?php  
 //fetch.php  
$connection = mysqli_connect("localhost", "root", "", "pbp_a_tts_672014113");
//include ("database/connection.php");

 $sql = "SELECT * FROM tbl_tweet ORDER BY tweet_id DESC";

 $res = mysqli_query($connection, $sql);  

 if(mysqli_num_rows($res) > 0)  
 {  
      while($row = mysqli_fetch_array($res))  
      {    

      	   echo '<div class="statusnya">';
           echo '<img src="images/dnb.png" class="pf">';
      	   echo '<a class="tebal" href="https://www.facebook.com/profile.php?id=100001794518762"> Da N Bo </a>';
      	   echo '<br>';
      	   echo '<p>Waktunya</p>';
      	   echo '<br>';
           echo '<p>'.$row["tweet"].'</p>';
           echo '</div>';  
      }  
 }  
 ?>  