    <!-- Header Content -->
<?php
include "include/header.php"; 
include 'include/db.php';
if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $rResult = $dbacc->query("SELECT * FROM eucpadmins WHERE id = '$id'"); //ubah code ni kalau tak masuk db
    $user = $rResult->fetch_assoc();
    $username = $user['username'];
}else
 echo '<meta http-equiv="refresh" content="0;url=settingsu.php?s=f">'; 
?>
    <!-- end header Content -->

<div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User Credentials <small>Management</small>
                        </h1>

                    </div>
                </div>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form method="POST" action = "regproses.php">
            <div class="form-goup">
                <label>Username</label> </br>
                <input class="form-control"  type="text" name = "user" value="<?=$username;?>" required>
            </div>
            <div class="form-goup">        
                <label>Password</label> </br>
                <input class="form-control"  type="password" name = "pass"  required>
             </div>
             </br>
             <input type="hidden" name = "num" value="<?=$id;?>"/>
            <input class="btn btn-primary" type ="submit" name = "submit" id ="submit" value="Submit">
    </div>
    

</div>

 </form>
  <?php include "include/footer.php"; ?>
