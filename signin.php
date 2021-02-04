<?php 
session_start();
         include 'include/connect.php';
         
         $mydb=  dbconnecti();
         if($_SERVER["REQUEST_METHOD"]=="POST")
         {
             $Myusername=  mysqli_real_escape_string($mydb,$_POST['uname']);
             
             $mypassword= mysqli_real_escape_string($mydb,$_POST['pwd']);
             
             $sql="select id from signup where uname='$Myusername' and pwd='$mypassword'";
             $sql1="select id from signup where id=(select MIN(id) from signup)";
             $result=  mysqli_query($mydb, $sql);
             $result1=  mysqli_query($mydb, $sql1);
             $row=  mysqli_fetch_array($result, MYSQLI_ASSOC);
             $row1=  mysqli_fetch_array($result1, MYSQLI_ASSOC);
             $count=  mysqli_num_rows($result);
             
             if($row['id']==$row1['id'])
             {
                 
                 $_SESSION['id']=$row1['id'];
                 
                 header("location:index.php");
             }
             elseif($count==1) 
             {
                $_SESSION['id']=$row['id'];
                 
                 header("location:user_index.php"); 
             }
             else 
             {
                 $msg='invalid username or password';
                 header("location:login.php?msg=$msg");
             }
         }
        else {
            $msg=NULL;
            header("location:login.php?msg=$msg");
        }
  ?>