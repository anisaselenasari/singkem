<?php
  include "conn_db.php";
  
    // Check if id is set or not if true toggle,
    // else simply go back to the page
    if (isset($_GET['id'])){
  
        // Store the value from get to a 
        // local variable "course_id"
        $id=$_GET['id'];
  
        // SQL query that sets the status
        // to 1 to indicate activation.
        $query = mysqli_query($conn,"UPDATE `ta` SET `btn`=0 WHERE $id");
    }
  

    header('location: monitoring.php');
?>