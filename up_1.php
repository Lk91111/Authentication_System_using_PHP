<?php
include 'include/connect.php';
 $mydb=  dbconnecti();
         if($_SERVER["REQUEST_METHOD"]=="POST")
         {
        
         $id=$_POST['id'];
         $mail=$_POST['mail'];
         $pn=$_POST['pn'];
         $uname=$_POST['uname'];
         $pwd=$_POST['pwd'];
         $cpwd=$_POST['cpwd'];
         if($pwd==$cpwd)
         {
         $sql="update signup set uname='$uname',pwd='$pwd',cpwd='$cpwd',mail='$mail',pn='$pn' where id='$id'";
         $result=  mysqli_query($mydb, $sql);
         if(mysqli_affected_rows($mydb)>0){
            header("Location:index.php");
            }
         else{
             echo "error";
            }
         }
         else {
             echo 'password mismatch';
         }
         }
         else{
             echo "error";
            }
?>

