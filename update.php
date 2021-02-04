<?php
        include 'head.php';
    
        include 'aside.php';
        
        include 'include/connect.php';
         
         $mydb=  dbconnecti();
         $id=$_GET['id'];
         $sql="select * from signup where id='$id'";
         $result=  mysqli_query($mydb, $sql);
         $value=mysqli_fetch_assoc($result)
    ?>
    <!-- ############ Aside END-->
    <div id="main" class="layout-column flex" style="background-color:#accffe;">
        <!-- ############ Header START-->
        <?php
        include 'header.php';
        ?>
        <!-- ############ Footer END-->
        <!-- ############ Content START-->
        <div id="content" class="flex">
            <!-- ############ Main START-->
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>update User</strong></div>
            <div class="col-md-6 container" style="margin-top: 30px;">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form method="post" action="up.php">
                                            <div class="form-group">
                                                <label class="text-primary" >ID</label>
                                                <input style="border: 1px solid #accffe;" type="text" class="form-control" readonly="" name="id" placeholder="" value="<?=$value['id']?>"></div>
                                           
                                            <div class="form-group">
                                                <label class="text-primary" >User Name</label>
                                                <input style="border: 1px solid #accffe;" type="text" class="form-control" disabled="" name="uname" placeholder="" value="<?=$value['uname']?>"></div>
                                            <div class="form-group">
                                                <label class="text-primary" >Password</label>
                                                <input style="border: 1px solid #accffe;" type="text" class="form-control" disabled="" name="pwd"  placeholder="" value="<?=$value['pwd']?>"></div>
                                            <div class="form-group">
                                                <label class="text-primary" >Email</label>
                                                <input style="border: 1px solid #accffe;" type="email" class="form-control" name="mail" placeholder="" value="<?=$value['mail']?>"></div>
                                            <div class="form-group">
                                                <label class="text-primary" >Phone</label>
                                                <input style="border: 1px solid #accffe;" type="number" class="form-control" name="pn"  placeholder="" value="<?=$value['pn']?>"></div>
                                    
                                           <div style="margin-top: 30px;">
                                               <input style="width:100%;" class="btn w-xl mb-3 btn-rounded btn-info" type="submit" value="UPDATE" name="Add">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
            <!-- ############ Main END-->
        </div>
        
    </div>
    <script src="adm_assets/js/site.min.js"></script>
</body>

</html>