<?php
include 'include/connect.php';
 $mydb=  dbconnecti();
 
         $id=$_GET['id'];
 
         $sql="delete from signup where id='$id'";
         $result=  mysqli_query($mydb, $sql);
         if(mysqli_affected_rows($mydb)>0){
            header("Location:logout.php");
            }
         else{
             echo "error";
            }
         
?>

