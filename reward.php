 <?php
include 'include/check.php';
include 'include/db.php';

if (isset($_GET["id"])) {
$uid = $_GET["id"];
$userResult = $dbtask->query("SELECT * FROM cq_user WHERE id = '$uid'"); //ubah code ni kalau tak masuk db
$userRow = $userResult->fetch_assoc();
$cid = $userRow['id'];
$cname = $userRow['name'];
$clevel = $userRow['level'];
$cpro = profession($userRow['profession']);

$sql3 = "SELECT * FROM products where name NOT LIKE '%VIP%'";
$productResult = mysqli_query($dbtask,$sql3);

}

function profession($val){
    if ($val == 10) $prof = "Mage";
    if ($val == 20) $prof = "Warior";
    if ($val == 30) $prof = "Paladin";
    if ($val == 50) $prof = "Vampire";
    
    return $prof;
}



?>
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <i class="fa fa-users" aria-hidden="true"></i> Reward Management<small> <?php echo $cname; ?></small>
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
                                        <th class="col-lg-3">Product Name</th>
                                        <th class="col-lg-1">Price</th>
                                        <th class="col-lg-1">Status</th>
                                        <th class="col-lg-1">Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $total_rows = 1; while($productRow = mysqli_fetch_assoc($productResult)){  
                                        //vip config
                                        if($productRow['status'] == 1) {
                                            $status = '<span class="label label-lg label-success">Available</span>';
                                         }
                                        else {
                                            $status = '<span class="label label-lg label-default">Not Available</span>';
                                         }
                                        
                                    ?>
                                        <tr>
                                        <td><?=$total_rows;?></td>
                                        <td><?php echo $productRow['name'];?></td>
                                        <td style="text-align:center;">MYR <?php echo $productRow['price']; ?></td>
                                        <td style="text-align:center;"><?php echo $status ?></td>
                                        <td >
                                            <center>
                                              <a id="confirmation"  href="usersettings.php?id=<?=$cid;?>&rid=<?=$productRow['id'];?>&t=reward" title="Reward Player" class = "btn btn-primary btn-sm" ><i class="fa fa-money" aria-hidden="true"></i>&nbsp; Send Reward to <?=$cname;?></a>&nbsp;
                                              
                                         </td>
                                        </tr>
                                        <?php $total_rows++; }  ?>

                                </tbody>
                            </table>
                         </div>
                    </div>
                </div>

    </div>
    
    <!-- /.footer -->
    
    <?php include "include/footer.php"; ?>
