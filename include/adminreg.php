    <!-- Header Content -->
<?php
include "header.php"; ?>
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
    <div class="col-lg-6">
        <form method="POST" action = "regproses.php">
            <div class="form-goup">
                <label>Username</label> </br>
                <input class="form-control"  type="text" name = "user"  required>
            </div>
            <div class="form-goup">        
                <label>Password</label> </br>
                <input class="form-control"  type="password" name = "pass"  required>
             </div>

    </div>
 

</div>
<input class="btn btn-primary pull-right" type ="submit" name = "submit" id ="submit" value="Submit">
 </form>
  <?php include "footer.php"; ?>
