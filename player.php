 <?php
include 'include/check.php';
include 'include/db.php';

if (isset($_GET["id"])) {
$uid = $_GET["id"];
$userResult = $dbacc->query("SELECT * FROM account WHERE id = '$uid'"); //ubah code ni kalau tak masuk db
$userRow = $userResult->fetch_assoc();
$accid = $userRow['id'];
$accname = $userRow['username'];
$accvip = $userRow['vip'];

$sql3 = "SELECT * FROM cq_user WHERE userid = '$accid'";
$result3 = mysqli_query($dbtask,$sql3);

}

function profession($val){
    if ($val == 10) $prof = "Mage";
    if ($val == 20) $prof = "Warior";
    if ($val == 30) $prof = "Paladin";
    if ($val == 40) $prof = "Chaos Knight";
    if ($val == 50) $prof = "Vampire";
    if ($val == 60) $prof = "Necromancer";
    
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
                              <i class="fa fa-users" aria-hidden="true"></i> Character Management<small> <?php echo $accname ?></small>
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
                                        <th class="col-lg-3">IGN</th>
                                        <th>Level</th>
                                        <th>Profession</th>
                                        <th>Status</th>
                                        <th class="col-lg-4">Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $total_rows = 1; while($row2 = mysqli_fetch_assoc($result3)){  
                                        //vip config
                                        if($row2['cheat_time'] == 1) {
                                            $jail = '<span class="label label-lg label-danger">Jail</span>';
                                            $jailconfig = '<a   id = "confirmation" data-toggle="tooltip" data-placement="top" title="Set Un-jail" class = "btn btn-success btn-sm <?=$disable;?>"  href="usersettings.php?id='.$row2['id'].'&t=unjail"  ><i class="fa fa-flag" aria-hidden="true"></i> Remove jail</a>&nbsp;';
                                            
                                        }
                                        else {
                                            $jail = '<span class="label label-lg label-default">Normal</span>';
                                            $jailconfig = '<a   id = "confirmation" data-toggle="tooltip" data-placement="top" title="Set Jail" class = "btn btn-danger btn-sm <?=$disable;?>"  href="usersettings.php?id='.$row2['id'].'&t=jail"  ><i class="fa fa-flag-o" aria-hidden="true"></i>&nbsp; Send to Jail</a>&nbsp;';
                                        }
                                        //mute config
                                        if($row2['disableFlag'] == 0) {
                                            $mute = '<span class="label label-lg label-danger">Jail</span>';
                                            $muteconfig = '<a   id = "confirmation" data-toggle="tooltip" data-placement="top" title="Mute Character" class = "btn btn-warning btn-sm <?=$disable;?>"  href="usersettings.php?id='.$row2['id'].'&t=mute"  ><i class="fa fa-microphone-slash" aria-hidden="true"></i> Mute</a>&nbsp;';
                                        }
                                        else {
                                            $mute = '<span class="label label-lg label-default">Normal</span>';
                                            $muteconfig = '<a   id = "confirmation" data-toggle="tooltip" data-placement="top" title="Mute Character" class = "btn btn-success btn-sm <?=$disable;?>"  href="usersettings.php?id='.$row2['id'].'&t=unmute"  ><i class="fa fa-microphone" aria-hidden="true"></i> Unmute</a>&nbsp;';
                                        }


                                        $charname = $row2['name'];
                                        $charid =  $row2['id'];
                                    ?>  
                                        <tr>
                                        <td><?=$total_rows;?></td>
                                        <td><?php echo $charname; ?></td>
                                        <td style="text-align:center;"><?php echo $row2['level']; ?></td>
                                        <td style="text-align:center;"><?php echo profession($row2['profession']); ?></td>
                                        <td style="text-align:center;"><?php echo $jail; ?></td>
                                        <td >
                                            <center>
                                              <a   href="reward.php?id=<?=$charid;?>" title="Reward Player" class = "btn btn-primary btn-sm" ><i class="fa fa-money" aria-hidden="true"></i>&nbsp; Reward</a>&nbsp;
                                              <?=$jailconfig;?>
                                              <?=$muteconfig;?>
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
