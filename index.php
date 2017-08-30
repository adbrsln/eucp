<?php session_start();
if (!isset($_SESSION['sid'])) {
    $str = 'main.php?s=f';
    redirect($str); 
}
function redirect($url)
    {
        if (!headers_sent())
        {    
            header('Location: '.$url);
            exit;
            }
        else
            {  
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
    }
include 'include/db.php';

$sql2 = "SELECT * FROM account where online ='0' order by vip DESC";

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
                            <i class="fa fa-user" aria-hidden="true"></i> Player <small>Management</small>
                        </h1>

                    </div>
                </div>

               <div class="row">
                    <div class="col-lg-12">
                        <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%"  id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class="col-lg-1">No.</th>
                                    <th>Account Name</th>
                                    <th class="col-lg-1">VIP</th>
                                    <th class="col-lg-2">VIP Dateline</th>
                                    <th class="col-lg-2">VIP Days Left</th>
                                    <th class="col-lg-4">Action</th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result2)){  
                                    //account status config
                                    
                                    //vip config
                                    if($row2['vip'] == 7) {
                                        
                                        $start = $row2['vipstart'];
                                        $end = $row2['vipend'];
                                        $diff = abs(strtotime($start) - strtotime($end));
                                        $years = floor($diff / (365*60*60*24));
                                        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                        
                                        $disable = 'disabled';
                                        $vps = '<span class="label label-lg label-success">VIP</span>';
                                        $vipconfig = '<a   id = "confirmation" data-toggle="tooltip" data-placement="top" title="Remove VIP" class = "btn btn-warning btn-sm <?=$disable;?>"  href="accsettings.php?id='.$row2['id'].'&t=rvip"  ><span class="glyphicon glyphicon-tower" ></span> Remove VIP</a>&nbsp;';
                                        $vpt = '<span class="label label-lg label-danger">'.$start.' - '.$end.' </span>';
                                        $daysleft = '<span class="label label-lg label-success">'.$days.' days left </span>';
                                    }
                                    else {
                                        $disable = '';
                                        $vps = '<span class="label label-lg label-default">Normal</span>';
                                        $vpt = '<span class="label label-lg label-default">Not Available</span>';
                                        $vipconfig = '<a   id = "confirmation" data-toggle="tooltip" data-placement="top" title="Reward VIP" class = "btn btn-success btn-sm <?=$disable;?>"  href="accsettings.php?id='.$row2['id'].'&t=vip"  ><span class="glyphicon glyphicon-tower" ></span>&nbsp; Reward VIP</a>&nbsp;';
                                        $daysleft = '<span class="label label-lg label-default"> Not Available </span>';
                                    }

                                    //ban config
                                ?>
                                    <tr>
                                    <td><?=$total_rows;?></td>
                                    <td><?php echo $row2['username']; ?></td>
                                    <td style="text-align:center;"><?php echo $vps; ?></td>
                                    <td style="text-align:center;"><?php echo $vpt; ?></td>
                                    <td style="text-align:center;"><?php echo $daysleft; ?></td>
                                    <td ><center>
                                        <a  data-toggle="tooltip" data-placement="top" title="View Player" class = "btn btn-primary btn-sm"  href="player.php?id=<?=$row2['id'];?>" ><span class="glyphicon glyphicon-eye-open" ></span> View Character</a>&nbsp;
                                        <a   id = "confirmation" data-placement="top" title="Ban Account" class = "btn btn-danger btn-sm"  href="accsettings.php?id=<?=$row2['id'];?>&t=ban" >Ban Account </a>
                                        <?=$vipconfig;?>
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
