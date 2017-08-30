<?php
include 'include/check.php';
include 'include/db.php';

$sql2 = "SELECT * FROM account where online ='1'";

$result2 = mysqli_query($dbacc,$sql2);
$p=mysqli_num_rows($result2);

?>
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-user" aria-hidden="true"></i> Banned Account <small>Management</small>
                        </h1>

                    </div>
                </div>

               <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class="col-lg-1">No.</th>
                                    <th>Account Name</th>
                                    <th class="col-lg-1">Status</th>
                                    <th class="col-lg-1">Action</th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result2)){  
                                    //account status config
                                    if($row2['online'] == 1) {
                                        $accstatus = '<span class="label label-lg label-danger">Banned</span>';
                                        $accconfig = '<a   id = "confirmation" data-placement="top" title="Ban Account" class = "btn btn-primary btn-sm"  href="accsettings.php?id='.$row2['id'].'&t=unban" ><i class="fa fa-lock" aria-hidden="true"></i>  Remove from Ban</a></center>';
                                    }else
                                    

                                    //ban config
                                ?>
                                    <tr>
                                    <td><?=$total_rows;?></td>
                                    <td><?php echo $row2['username']; ?></td>
                                    <td style="text-align:center;"><?php echo $accstatus; ?></td>
                                    <td ><center>
                                        <?=$accconfig;?>
                                         </center></td>
                                    </tr>
                                    <?php $total_rows++; }  ?>

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                
        
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>
