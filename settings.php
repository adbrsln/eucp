<?php
include 'include/check.php';
include 'include/db.php';

$sql2 = "SELECT * FROM products ";

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
                            <i class="fa fa-cog" aria-hidden="true"></i> Eujin Online Cpanel<small> Management</small>
                        </h1>

                    </div>
                </div>

               <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3">
                             <div class="list-group">
                                <a class="list-group-item" href="settings.php"><i class="fa fa-bank" aria-hidden="true"></i>  Reward Settings</a>
                                 <a class="list-group-item" href="settingsu.php"><i class="fa fa-user" aria-hidden="true"></i>  User Settings</a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                             <div class="alert alert-info alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <i class="fa fa-info-circle"></i>  <strong>Adding a new item?</strong> Try out <a data-toggle="modal" data-target="#myModal" class="alert-link">Here</a>
                                </div>
                                <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-1">No.</th>
                                            <th>Package Name</th>
                                            <th class="col-lg-1">Price</th>
                                            <th class="col-lg-2">Task Code</th>
                                            <th class="col-lg-2">Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result2)){  
                                            //account status config
                                            
                                            //vip config
                                            
                                            $disable = '';
                                            $vps = '<span class="label label-lg label-success">MYR '.$row2['price'].'</span>';


                                            //ban config
                                        ?>
                                            <tr>
                                            <td><?=$total_rows;?></td>
                                            <td><?php echo $row2['name']; ?></td>
                                            <td style="text-align:center;"> <?php echo $vps; ?></td>
                                            <td style="text-align:center;"><?php echo $row2['taskcode']; ?></td>
                                            <td ><center>
                                                <a  data-toggle="tooltip" data-placement="top" title="View Item" class = "btn btn-primary btn-sm"  href="productedit.php?id=<?=$row2['id'];?>&t=edit" ><i class="fa fa-pencil" aria-hidden="true"></i></span></a>&nbsp;
                                                <a   id = "confirmation" data-placement="top" title="Delete Package" class = "btn btn-danger btn-sm"  href="iproses.php?id=<?=$row2['id'];?>&t=del" ><i class="fa fa-trash" aria-hidden="true"></i></a></center>
                                        
                                                </center></td>
                                            </tr>
                                            <?php $total_rows++; }  ?>

                                    </tbody>
                                </table>
                                </div>
                            
                        </div>
                    </div>
                </div>
                
    <div class="modal fade bs-example-modal-lg" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header ">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">New Package</h4>
                    </div>
                    <div class="modal-body">

                          <form method="POST" action = "iproses.php?t=add">
	                           <p>Package Name</p>
                               <input class="form-control"  type="text" name = "pn" maxlength="30" required>
                                </br>
                                <p>Package Price (MYR)</p>
                               <input class="form-control"  type="text" name = "pp" maxlength="12" placeholder="e.g : 25"required>
                                 </br>
                                 <p>Package Description</p>
                                 <textarea class="form-control ckeditor" cols = "77" name= "c" rows="5" required></textarea>
                                 </br>
                                <p>Package Task Code</p>
                                <input class="form-control"  type="text" name = "tc" placeholder="e.g : 941339085222" required>
                                 </br>
                        </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-primary" value ="Submit" id="submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                  </div>

                </div>
              </div>
    </div>    
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>
