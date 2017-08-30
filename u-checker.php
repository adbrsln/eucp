<?php 
include 'include/check.php';
if(isset($_POST["username"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    include 'include/db.php';
   
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $sql="SELECT name FROM cq_user WHERE name = '". $username."'";
    $result=mysqli_query($dbtask,$sql);
    if(mysqli_fetch_array($result,MYSQLI_ASSOC)){
        die("<div class='alert alert-success' role='alert'>Your Username is<strong> Verified</strong></div><script>document.getElementById('output').style.visibility ='visible';</script>");
    }else{
        die("<div class='alert alert-danger' role='alert'>Your Username is not<strong> Exist</strong></div><script>document.getElementById('output').style.visibility ='hidden';</script>");
    }
}
?>