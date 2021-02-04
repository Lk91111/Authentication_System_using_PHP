<?php
session_start();
        include 'head.php';
        include 'include/connect.php';
         
         $mydb=  dbconnecti();
         $id=$_SESSION['id'];
         $sql="select * from signup where not id='$id'";
         $result=  mysqli_query($mydb, $sql);
         
    ?>
    <!-- ############ Aside START-->
    <?php
        include 'aside.php';
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
            <div class="card-header" style="text-align: center; text-transform: uppercase; font-size: 26px;margin-top: 20px;"><strong>Users Details</strong></div>
            <div class="col-md-12 container" style="margin-top: 30px;">
                
                    <div class="padding">
                        <div class="mb-5">
                           
                            <div class="table-responsive">
                                <table class="table table-theme table-row v-middle">
                                    <thead>
                                        <tr style="background-color:#101525; height: 80px;font-size: 16px;">
                                            <th style="width:20px">
                                                <label class="ui-check m-0">
                                                    </label>
                                            </th>
                                            <th class="text-muted">Id</th>
                                            
                                            <th class="text-muted">User Name</th>
                                            <th class="text-muted">Email</th>
                                            <th class="text-muted">Phone</th>
                                            
                                            <th class="text-muted">Password</th>
                                            <th class="text-muted">Date </th>
                                            <th class="text-muted">Action</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row=  mysqli_fetch_array($result, MYSQLI_ASSOC))
                                            {
                                        ?>
                                        <tr class="v-middle" data-id="15">
                                            <td>
                                                
                                            </td>
                                             <td>
                                                <div class="avatar-group"><?=$row['id']?></div>
                                            </td>
                                            
                                            <td>
                                                <div class="avatar-group"><?=$row['uname']?></div>
                                            </td>
                                             <td>
                                                <div class="avatar-group"><?=$row['mail']?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$row['pn']?></div>
                                            </td>
                                            
                                            <td>
                                                <div class="avatar-group"><?=$row['pwd']?></div>
                                            </td>
                                            <td>
                                                <div class="avatar-group"><?=$row['datetimes']?></div>
                                            </td>
                                            <td>
                                                 <div class="avatar-group">
                                                     <a href="delete.php?id=<?=$row['id']?>"><span class="nav-icon text-info">
                                                                    <i data-feather="trash">

                                                                    </i>
                                                         </span></a>
                                                    <a href="update.php?id=<?=$row['id']?>"><span class="nav-icon text-info">
                                                                    <i data-feather="edit">

                                                                    </i>
                                                         </span></a>
                                                    
                                                 </div>
                                            </td>
                                            
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>                  
            </div>
            <!-- ############ Main END-->
        </div>
        
    </div>
    <script src="adm_assets/js/site.min.js"></script>
</body>

</html>