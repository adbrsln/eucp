<?php
include 'include/check.php';
include 'include/db.php';

$sql2 = "select d.id as did,c.name as username,d.userid,d.email,d.donation_status,d.date_time,d.bank,d.server,d.refid,p.id as pid ,p.name,p.price
 from  donation d 
 join  products p on d.product_id = p.id
 join cq_user c on d.userid = c.id";

$result2 = mysqli_query($dbtask,$sql2);
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
                            <i class="fa fa-user" aria-hidden="true"></i> Donations <small>Management</small>
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
                                    <th>IGN Name</th>
                                    <th>Server</th>
                                    <th>Email</th>
                                    <th>Date/Time</th>
                                    <th>Bank</th>
                                    <th>Package Name</th>
                                    <th class="col-lg-1">Status</th>
                                    <th class="col-lg-1">Action</th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result2)){  
                                    //account status config
                                    if($row2['donation_status'] == 0) {
                                        $accstatus = '<span class="label label-lg label-default">Not Complete</span>';
                                        $accconfig = '<a   id = "confirmation" data-placement="top" title="reward" class = "btn btn-success btn-sm "  href="dreward.php?pid='.$row2['pid'].'&did='.$row2['did'].'&uid='.$row2['userid'].'" ><i class="fa fa-lock" aria-hidden="true"></i>  Send Reward</a></center>';
                                    }else{
                                        $accstatus = '<span class="label label-lg label-success">Complete</span>';
                                        $accconfig = '<a   id = "confirmation" data-placement="top" title="reward" class = "btn btn-danger btn-sm disabled"  href="dreward.php?pid='.$row2['pid'].'&did='.$row2['did'].'&uid='.$row2['userid'].'" ><i class="fa fa-lock" aria-hidden="true"></i>  Complete Reward</a></center>';
                                    }
                                ?>
                                    <tr>
                                    <td><?=$total_rows;?></td>
                                    <td><?php echo $row2['username']; ?></td>
                                    <td><?php echo $row2['server']; ?></td>
                                    <td><?php echo $row2['email']; ?></td>
                                    <td><?php echo $row2['date_time']; ?></td>
                                    <td><?php echo $row2['bank']; ?></td>
                                    <td><?php echo $row2['name']; ?></td>
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
