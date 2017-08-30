<?php include 'include/check.php';
 include 'include/db.php';
if(isset($_POST['submit'])) {
    echo 'submit ada oi ';
        $ign = $_POST['ign'];
        $email = $_POST['email'];
        $server = $_POST['server'];
        $bank = $_POST['bank'];
        $refid = $_POST['refid'];
        $dt = $_POST['datetimepayment'];
        $package = $_POST['package'];
        
        $userresult = $dbtask->query("SELECT * FROM cq_user WHERE name = '$ign'"); //ubah code ni kalau tak masuk db
        $yuserRow2 = $userresult->fetch_assoc();
        $userid = $yuserRow2['id'];
        
        //insert doate table
        $check = $dbtask->query("INSERT INTO donation(userid,email,product_id,bank,server,date_time,refid,donation_status) VALUES 
        ('".$userid."','".$email."','".$package."','".$bank."','".$server."','".$dt."','".$refid."',0)");
        $str = 'donate.php?s=t';
        redirect($str); 
    } else {
        $str = 'donate.php?s=f';
        redirect($str); 

    }

?>