<?php
session_start();
if(!isset($_SESSION['id']))
    {
        header("location:login.php");
    }
include 'include/connect.php';
         
         $mydb=  dbconnecti();
         $id=$_SESSION['id'];
         $sql="select * from signup where id='$id'";
         $result=  mysqli_query($mydb, $sql);
         $row=  mysqli_fetch_array($result, MYSQLI_ASSOC);
include 'head.php';?>
    <!-- ############ Aside START-->
      <?php include 'aside.php';?>
    <!-- ############ Aside END-->
    <div id="main" class="layout-column flex" style="background-color:#accffe;">
        <!-- ############ Header START-->
        <?php include 'header.php';?>
        
        <div id="content" class="flex">
            <!-- ############ Main START-->
            <div>
                
                <div class="page-content page-container" id="page-content" style="margin-top: 50px;">
                    <div class="padding sr">
                        <div class="card">
                            <div class="card-header bg-dark bg-img p-0 no-border" data-stellar-background-ratio="0.1" style="background-image:url(../assets/img/b3.jpg)" data-plugin="stellar">
                                <div class="bg-dark-overlay r-2x no-r-b">
                                    <div class="d-md-flex" style="background-color:#192039;">
                                        <div class="p-4">
                                             <div class="mx-3">
                                                 <h5 class="mt-2" style="text-transform: uppercase;">welcome <?=$row['uname']?></h5>
                                             </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="d-flex">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#" data-toggle="tab" data-target="#tab_1">profile</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab" data-target="#tab_2">update Account</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab" data-target="#tab_3">delete Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-sm-12 col-lg-12">
                                <div class="tab-content">
                                   
                                    <div class="tab-pane fade show active" id="tab_1">
                                        <div class="card" style="height:auto;">
                                            
                                            <div class="px-4 py-4">
                                                <div class="row mb-2">
                                                    <div class="col-6"><small class="text-muted">User Name</small>
                                                        <div class="my-2"><?=$row['uname']?></div>
                                                    </div>
                                                    <div class="col-6"><small class="text-muted">Password</small>
                                                        <div class="my-2"><?=$row['pwd']?></div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6"><small class="text-muted">Phone</small>
                                                        <div class="my-2"><?=$row['pn']?></div>
                                                    </div>
                                                    <div class="col-6"><small class="text-muted">Email</small>
                                                        <div class="my-2"><?=$row['mail']?></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane fade show" id="tab_2">
                                        <div class="card" style="height:auto;">
                                            
                                            <div class="card-body">
                                                <form method="post" action="up_1.php">
                                            <div class="form-group">
                                                <label class="text-primary" >ID</label>
                                                <input style="border: 1px solid #accffe;" type="text" class="form-control" readonly="" name="id" placeholder="" value="<?=$row['id']?>"></div>
                                           
                                            <div class="form-group">
                                                <label class="text-primary" >User Name</label>
                                                <input style="border: 1px solid #accffe;" type="text" class="form-control" name="uname" placeholder="" value="<?=$row['uname']?>"></div>
                                            <div class="form-group">
                                                <label class="text-primary" >Password</label>
                                                <input style="border: 1px solid #accffe;" type="text" class="form-control"  name="pwd"  placeholder="" value="<?=$row['pwd']?>"></div>
                                                 <div class="form-group">
                                                <label class="text-primary" >confirm Password</label>
                                                <input style="border: 1px solid #accffe;" type="text" class="form-control" name="cpwd"  placeholder="" value="<?=$row['cpwd']?>"></div>
                                            <div class="form-group">
                                                <label class="text-primary" >Email</label>
                                                <input style="border: 1px solid #accffe;" type="email" class="form-control" name="mail" placeholder="" value="<?=$row['mail']?>"></div>
                                            <div class="form-group">
                                                <label class="text-primary" >Phone</label>
                                                <input style="border: 1px solid #accffe;" type="number" class="form-control" name="pn"  placeholder="" value="<?=$row['pn']?>"></div>
                                    
                                          
                                           <div style="margin-top: 30px;">
                                               <input style="width:100%;" class="btn w-xl mb-3 btn-rounded btn-info" type="submit" value="UPDATE" name="Add">
                                            </div>
                                        </form>
                                    </div>
                                                
                                            </div>
                                        </div>
                                    
                                    <div class="tab-pane fade show" id="tab_3">
                                        <div class="card" style="height:auto;">
                                            
                                            <div class="card-body">
                                                <h3>Are you want to delete your account??</h3>
                                                <br><a class="col-lg-6" style="color:red;" href="delete_1.php?id=<?=$row['id']?>">Delete</a><a class="col-lg-6" style="color:green;" href="">Cancel</a>
                                            </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ############ Main END-->
        </div>
        <!-- ############ Content END-->
       
    </div>
    <script src="adm_assets/js/site.min.js"></script>
</body>

</html>