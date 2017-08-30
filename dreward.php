<?php include 'include/check.php';
include 'include/db.php';

if (isset($_GET['uid']) && isset($_GET['pid']) && isset($_GET['did']) )
{
    
    $userid = $_GET['uid'];
    $productid = $_GET['pid'];
    $donationid = $_GET['did'];
    //check if cq_user available
    $cq_usercheck = $dbtask->query("SELECT * FROM cq_user WHERE (`id` LIKE '".$userid."')");
    if ($cq_usercheck->num_rows > 0)
    {
            echo $userid.'</br>'.$productid.'</br>'.$donationid;
            //check product items and get product code
            $rResult = $dbtask->query("SELECT * FROM products WHERE id = '$productid'"); //ubah code ni kalau tak masuk db
            
            $rewardRow2 = $rResult->fetch_assoc();
            $taskcode = $rewardRow2['taskcode'];
            //insert reward items
            $dbtask->query("INSERT INTO cq_taskdetail(userid,taskid,taskbegintime) VALUES ('".$userid."','".$taskcode."',1349439741)");
            //update donations transactions
            $dbtask->query("UPDATE donation SET donation_status='1' WHERE id='".$donationid."'");
            $str = 'donations.php?s=t';
            redirect($str); 
    }
    else
    {
         $str = 'donations.php?s=f'; //redirect to main page because something is wrong
        redirect($str);
    }
}

?>