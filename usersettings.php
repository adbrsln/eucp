<?php 
include 'include/check.php';
include 'include/db.php';

if (isset($_GET['id']) && isset($_GET['t']) )
{
    echo 'entering program</br>';
    $id = $_GET['id'];
    $type = $_GET['t'];
    //check if cq_user available
    $cq_usercheck = $dbtask->query("SELECT * FROM cq_user WHERE (`id` LIKE '".$id."')");
    if ($cq_usercheck->num_rows > 0)
    {
        if($type == 'jail'){
            //check if ban exist
            echo 'entering ban</br>';
            $bancheck = $dbtask->query("SELECT * FROM cq_user WHERE (`id` LIKE '".$id."') AND `cheat_time` = '0'");
            $jRow = $bancheck->fetch_assoc();
            $userid = $jRow['userid'];
            if ($bancheck->num_rows > 0)
            {   
                echo 'jail';
                $dbtask->query("UPDATE cq_user SET cheat_time='1' WHERE id='".$id."'");
                $str = 'player.php?id='.$userid.'&s=jt';
                redirect($str);
            }else {
                $str = 'index.php?s=jf';
                redirect($str);
            }
        } 
        else if($type == 'unjail'){
            echo 'entering unban</br>';
            $banchecku = $dbtask->query("SELECT * FROM cq_user WHERE (`id` LIKE '".$id."') AND `cheat_time` = '1'");
            $jRow = $banchecku->fetch_assoc();
            $userid = $jRow['userid'];
            if ($banchecku->num_rows > 0)
            {   
                echo 'unban';
                $dbtask->query("UPDATE cq_user SET cheat_time='0' WHERE id='".$id."'");
                $str = 'player.php?id='.$userid.'&s=ujt';
                redirect($str);
            }else {
                $str = 'index.php?s=ujf';
                redirect($str);
            }
        }
        else if($type == 'mute'){
            echo 'entering unban</br>';
            $banchecku = $dbtask->query("SELECT * FROM cq_user WHERE (`id` LIKE '".$id."') AND `disableFlag` = '0'");
            $jRow = $banchecku->fetch_assoc();
            $userid = $jRow['userid'];
            if ($banchecku->num_rows > 0)
            {   
                $dbtask->query("UPDATE cq_user SET disableFlag='1' WHERE id='".$id."'");
                $str = 'player.php?id='.$userid.'&s=mt';
                redirect($str);
            }else {
                $str = 'index.php?s=mf';
                redirect($str);
            }
        }
        else if($type == 'unmute'){
            echo 'entering unban</br>';
            $banchecku = $dbtask->query("SELECT * FROM cq_user WHERE (`id` LIKE '".$id."') AND `disableFlag` = '1'");
            $jRow = $banchecku->fetch_assoc();
            $userid = $jRow['userid'];
            if ($banchecku->num_rows > 0)
            {   
                $dbtask->query("UPDATE cq_user SET disableFlag='0' WHERE id='".$id."'");
                $str = 'player.php?id='.$userid.'&s=umt';
                redirect($str);
            }else {
                $str = 'index.php?s=umf';
                redirect($str);
            }
        }
        else if($type == 'reward' && isset($_GET['rid'])){
            $rid = $_GET['rid'];
            $rewardResult = $dbtask->query("SELECT * FROM products WHERE id = '$rid'"); //ubah code ni kalau tak masuk db
            $rewardRow = $rewardResult->fetch_assoc();
            $taskcode = $rewardRow['taskcode'];
            $dbtask->query("INSERT INTO cq_taskdetail(userid,taskid,taskbegintime) VALUES ('".$id."','".$taskcode."',1349439741)");
           $str = 'reward.php?id='.$id.'&s=rt';
            redirect($str); 
        } 
        else {
            $str = 'reward.php?id='.$id.'&s=rf';
            redirect($str); 
        }
           
        
    }
    else
    {
         $str = 'index.php?s=f'; //redirect to main page because something is wrong
        redirect($str);
    }
}


?>