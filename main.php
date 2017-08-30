<?php //include 'include/check.php';

			?>
<!-- header page include-->
        <?php include 'include/header2.php'; ?>
     <!-- header page include-->
<div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                        </h1>
                        
                    </div>
                </div>
        <div class="col-lg-4 col-lg-offset-4">
           <div class="row">
                <form method="post" action="./include/loginproc.php">
                    <center><img src="image/logo.png"></center>
                    <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name ="user" required><br>
                    <label>Password</label>
                    <input class="form-control" name="pass" type="password" required><br>
                   </div>

                    <input class="btn btn-primary btn-block" type="submit" name = "submit" value="Login"><br>

                </form>
            </div>
        </div>
    <div class="col-lg-4"></div>
</div>
<!-- header page include-->
        <?php include 'include/footer.php'; ?>
     <!-- header page include-->