<?php
include "include/header.php"; 
include 'include/db.php';
if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $rResult = $dbtask->query("SELECT * FROM products WHERE id = '$id'"); //ubah code ni kalau tak masuk db
    $products = $rResult->fetch_assoc();
    $pn = $products['name'];
    $pp = $products['price'];
    $ptc = $products['taskcode'];
}else
 echo '<meta http-equiv="refresh" content="0;url=settingsu.php?s=f">'; 
?>
    <!-- end header Content -->

<div class="container">
       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Products <small>Management</small>
                        </h1>

                    </div>
                </div>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form method="POST" action = "iproses.php">
            <p>Package Name</p>
            <input class="form-control"  type="text" name = "pn" maxlength="30" value = "<?=$pn;?>" required>
            </br>
            <p>Package Price (MYR)</p>
            <input class="form-control"  type="text" name = "pp" maxlength="12" placeholder="e.g : 25" value = "<?=$pp;?>" required>
            </br>
            <p>Package Task Code</p>
            <input class="form-control"  type="text" name = "tc" placeholder="e.g : 941339085222"value = "<?=$ptc;?>" required>
            </br>
             <input type="hidden" name = "num" value="<?=$id;?>"/>
             <input type="hidden" name = "t" value="edit"/>
            <input class="btn btn-primary" type ="submit" name = "submit" id ="submit" value="Submit">
    </div>
    

</div>

 </form>
  <?php include "include/footer.php"; ?>
