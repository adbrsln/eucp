<?php include 'include/check.php';
include 'include/db.php';

if (isset($_GET['id']) && isset($_GET['t']) )
{
    echo 'entering program</br>';
    $id = $_GET['id'];
    $type = $_GET['t'];
    //check if account available
    $accountcheck = $dbacc->query("SELECT * FROM account WHERE (`id` LIKE '".$id."')");
    if ($accountcheck->num_rows > 0)
    {
        if($type == 'ban'){
            //check if ban exist
            echo 'entering ban</br>';
            $bancheck = $dbacc->query("SELECT * FROM account WHERE (`id` LIKE '".$id."') AND `online` = '0'");
            if ($bancheck->num_rows > 0)
            {   
                echo 'ban';
                $dbacc->query("UPDATE account SET online='1' WHERE id='".$id."'");
                $str = 'index.php?s=bt';
                redirect($str);
            }else {
                $str = 'index.php?s=bf';
                redirect($str);
            }
        } 
        else if($type == 'unban'){
            echo 'entering unban</br>';
            $banchecku = $dbacc->query("SELECT * FROM account WHERE (`id` LIKE '".$id."') AND `online` = '1'");
            if ($banchecku->num_rows > 0)
            {   
                echo 'unban';
                $dbacc->query("UPDATE account SET online='0' WHERE id='".$id."'");
                $str = 'index.php?s=ut';
                redirect($str);
            }else {
                $str = 'index.php?s=uf';
                redirect($str);
            }
        }
        else if($type == 'rvip'){
            echo 'entering vip</br>';
            $dbacc->query("UPDATE account SET vip = '3' WHERE id = '".$id."'");
            $str = 'index.php?s=rvt';
            redirect($str); 
        } 
        else if($type == 'vip'){
            $day = date("Y/m/d");
            $hariend = date('Y/m/d', strtotime($day. ' + 15 days'));
            echo 'entering vip</br>';
            $dbacc->query("UPDATE account SET vip = '7', vipstart= '".$day."', vipend = '".$hariend."' WHERE id = '".$id."'");
            $str = 'index.php?s=vt';
            redirect($str); 
        }
        else {
            $str = 'index.php?s=f';
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