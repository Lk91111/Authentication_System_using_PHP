<?php
            
         include 'include/connect.php';
         
         $mydb=  dbconnecti();
         if($_SERVER["REQUEST_METHOD"]=="POST")
         {
             $username=$_POST['uname'];
             $phone=$_POST['pn'];
             $email=$_POST['mail'];
             $pass=$_POST['pwd'];
             $con_pass=$_POST['cpwd'];
             $uppercase=  preg_match('@[A-Z]@', $pass);
             $lowercase=  preg_match('@[a-z]@', $pass);
             $num=  preg_match('@[0-9]@', $pass);
             $spchar=  preg_match('@[^\w]@', $pass);
             if($username!=NULL&&($pass!=NULL||$con_pass!=NULL))
             {
               
                if(!$uppercase||!$lowercase||!$num||!$spchar||strlen($pass)<8)
                {
                    $msg='Password should contain atleast one uppercase, one lowercase, one number, one special charecter and atleast have 8 characters';
                       header("location:register.php?msg=$msg");
                }
                else
                {
                if($pass==$con_pass)
                {
                    if(strlen($phone)==10)
                    {
                  $sql="insert into signup(uname,pn,mail,pwd,cpwd) values('$username','$phone','$email','$pass','$con_pass')";
                  $result=  mysqli_query($mydb, $sql);
                
                
                    if(mysqli_affected_rows($mydb)>0)
                    {
                        $msg='Registered Successfully';
                       
    
$to_email = 'admin@registertophp.ml';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: laxmikant91111@gmail.com';
mail($to_email,$subject,$message,$headers);

                       
                        header("location:register.php?msg1=$msg");
                    }  
                    else
                    {
                       $msg='Oops!! something went wrong';
                       header("location:register.php?msg=$msg"); 
                    }  
                    }
                    else
                    {
                    $msg='please enter a valid phone number';
                    header("location:register.php?msg=$msg");
                    }
                }
                else
                {
                    $msg='Password mismatch';
                    header("location:register.php?msg=$msg");
                }
                }
               
               
                
             }
             else
             {
                $msg='UserName and Password cannot be null';
                header("location:register.php?msg=$msg");  
             }
		 }
             
         
  ?>