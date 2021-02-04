<?php
include 'include/connect.php';
 $mydb=  dbconnecti();
         if($_SERVER["REQUEST_METHOD"]=="POST")
         {
        
         $id=$_POST['id'];
         $mail=$_POST['mail'];
         $pn=$_POST['pn'];
         
         $sql="update signup set mail='$mail',pn='$pn' where id='$id'";
         $result=  mysqli_query($mydb, $sql);
         if(mysqli_affected_rows($mydb)>0){
            header("Location:user_home.php");
            }
         else{
             echo "error";
            }
         }
         else{
             echo "error";
            }
?>

