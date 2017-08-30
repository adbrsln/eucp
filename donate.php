<?php //include 'include/check.php';
    include 'include/db.php';
    include "include/header2.php";
    $sql3 = "SELECT * FROM products where name NOT LIKE '%VIP%'";
    $productResult = mysqli_query($dbtask,$sql3);
    function row(){
        
    }
    
    ?>
    <!-- end header Content -->
   
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                <h1 class="page-header">
                    Donation Order <small>Forms</small>
                </h1>
             </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-md-offset-0">
                <div class="col-lg-6 col-md-6">
                    <div class="row product">
                    <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Maybank" aria-controls="home" role="tab" data-toggle="tab">Maybank</a></li>
                        <li role="presentation"><a href="#CIMB" aria-controls="profile" role="tab" data-toggle="tab">CIMB</a></li>
                        <li role="presentation"><a href="#RHB" aria-controls="messages" role="tab" data-toggle="tab">RHB</a></li>
                        <li role="presentation"><a href="#BSN" aria-controls="settings" role="tab" data-toggle="tab">BSN</a></li>
                        <li role="presentation"><a href="#Public" aria-controls="settings" role="tab" data-toggle="tab">Public Bank</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Maybank">
                            <div class="col-md-12 col-md-offset-0">
                                <hr>
                                <div class="row">
                                    <center><img class="img-responsive" style ="height:60%;width:50%;" src="image/mb.jpg" ></center>
                                </div>
                                <hr>
                                <div class="well">
                                <center>
                                    <strong><h4><p>Hairulnizam Bin Razali<br />1611-9005-4725<br />haizamlee@gmail.com</p></strong></h4>
                                </center>
                                </div>
                                <p>- Please fill in an email above inside E-Mail Section if you are using Maybank2u.<br />- Please fill in your username inside the details section if you are using Maybank2u.<br />- Failed to fill in the requirement above will lead us to take more times for the confirmation.<br />- All transactions of donations are not refundable.<br />* Fill in the form that we provide on the right side for the details of donations.<br />- Do not attempt to make any scam information as your IP address is detected by our provider and it will lead your id to be ban forever.<br />- Please keep your transaction receipt for our future reference if you are using Deposit Machine.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="CIMB">
                            <div class="col-md-12 col-md-offset-0">
                                <hr>
                                <div class="row">
                                    <center><img class="img-responsive" style ="height:40%;width:50%;" src="image/cimb.jpg" ></center>
                                </div>
                                <hr>
                                <div class="well">
                                <center>
                                    <strong><h4><p>Hairulnizam Bin Razali<br />7031694244<br />haizamlee@gmail.com</p></strong></h4>
                                </center>
                                </div>
                                <p>- Please fill in an email above inside E-Mail Section if you are using Maybank2u.<br />- Please fill in your username inside the details section if you are using Maybank2u.<br />- Failed to fill in the requirement above will lead us to take more times for the confirmation.<br />- All transactions of donations are not refundable.<br />* Fill in the form that we provide on the right side for the details of donations.<br />- Do not attempt to make any scam information as your IP address is detected by our provider and it will lead your id to be ban forever.<br />- Please keep your transaction receipt for our future reference if you are using Deposit Machine.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="RHB">
                            <div class="col-md-12 col-md-offset-0">
                                <hr>
                                <div class="row">
                                    <center><img class="img-responsive" style ="height:50%;width:80%;" src="image/RHB.jpg" ></center>
                                </div>
                                <hr>
                                <div class="well">
                                <center>
                                    <strong><h4><p>Hairulnizam Bin Razali<br />7031694244<br />haizamlee@gmail.com</p></strong></h4>
                                </center>
                                </div>
                                <p>- Please fill in an email above inside E-Mail Section if you are using Maybank2u.<br />- Please fill in your username inside the details section if you are using Maybank2u.<br />- Failed to fill in the requirement above will lead us to take more times for the confirmation.<br />- All transactions of donations are not refundable.<br />* Fill in the form that we provide on the right side for the details of donations.<br />- Do not attempt to make any scam information as your IP address is detected by our provider and it will lead your id to be ban forever.<br />- Please keep your transaction receipt for our future reference if you are using Deposit Machine.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="BSN">
                            <div class="col-md-12 col-md-offset-0">
                                <img class="img-responsive" src="image/logo.png" >
                                <h2>Donation Forms</h2>
                                <p>MAYBANK<br />Name = Hairulnizam Bin Razali<br />Bank Acc = 1611-9005-4725<br />Email = haizamlee@gmail.com</p>
                                <p>- Please fill in an email above inside E-Mail Section if you are using Maybank2u.<br />- Please fill in your username inside the details section if you are using Maybank2u.<br />- Failed to fill in the requirement above will lead us to take more times for the confirmation.<br />- All transactions of donations are not refundable.<br />* Fill in the form that we provide on the right side for the details of donations.<br />- Do not attempt to make any scam information as your IP address is detected by our provider and it will lead your id to be ban forever.<br />- Please keep your transaction receipt for our future reference if you are using Deposit Machine.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Public">
                            <div class="col-md-12 col-md-offset-0">
                                <img class="img-responsive" src="image/logo.png" >
                                <h2>Donation Forms</h2>
                                <p>MAYBANK<br />Name = Hairulnizam Bin Razali<br />Bank Acc = 1611-9005-4725<br />Email = haizamlee@gmail.com</p>
                                <p>- Please fill in an email above inside E-Mail Section if you are using Maybank2u.<br />- Please fill in your username inside the details section if you are using Maybank2u.<br />- Failed to fill in the requirement above will lead us to take more times for the confirmation.<br />- All transactions of donations are not refundable.<br />* Fill in the form that we provide on the right side for the details of donations.<br />- Do not attempt to make any scam information as your IP address is detected by our provider and it will lead your id to be ban forever.<br />- Please keep your transaction receipt for our future reference if you are using Deposit Machine.</p>
                            </div>
                        </div>
                    </div>

                    </div>
                        
                    </div>
                </div>
           
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Donator's Details</strong></h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" name ="myform" action = "donateprocess.php" >
                        <span id="user-result"></span>
                        <label for="username">In Game Name (IGN)</label>&nbsp;
                           <input class="form-control"  name="ign" type="text" id="username" value = "" placeholder="Verify IGN Username Here" required>
                           
                           </br>
                        <div id="output">
                            <div class="form-group">
                                <label for="email">Email</label>&nbsp;
                                <input class="form-control disabled"  name="email" type="email" id="email" value = "" placeholder="Your Legit Email" required>
                            </div>
                            <div class="form-group">
                                <label for="server">Select Server</label>
                                <select class="form-control" id="server"name ="server">
                                    <option value ="Winterfrost">Winterfrost</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="server">Select Bank</label>
                                <select class="form-control" id="bank"name ="bank">
                                    <option value = "Maybank">Maybank</option>
                                    <option value = "CIMB">CIMB</option>
                                    <option value = "RHB">RHB</option>
                                    <option value = "BSN">BSN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Reference ID (Optional)</label>&nbsp;
                                <input class="form-control"  name="refid" type="text" id="refid" value = "" placeholder="This is Optional" >
                            </div>
                            <div class="form-group">
                               <label >Payment Date / Time</label>&nbsp;
                               <input type='text' class="form-control" name="datetimepayment" id='datetimepicker1' placeholder ="Set your payment date here" required/>
                            </div>
                            <div class="form-group">
                                <label>Select Package</label>
                                <select class="form-control" id="package" name ="package">
                                   <?php while($row = mysqli_fetch_assoc($productResult)){ 
                                        echo '<option value = "'.$row['id'].'">'.$row['name'].'</option>';
                                    }?>
                                </select>
                            </div>
                            <!-- <div class="g-recaptcha" data-sitekey="6Le7jSwUAAAAADYtnoNO2ZKD_hFLg4Dt1pY4718g" data-callback="enableBtn"></div> -->
                            </br>
                        <input class="btn btn-lg btn-primary btn-block" type ="submit"  name = "submit"  id="confirma" value="submit">
                   
                        </form>
                       </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer -->
    
 
<script type="text/javascript">
    document.getElementById('output').style.visibility ='hidden';
    //document.getElementById("btn-submit").disabled = true;
</script>
 
    <?php include "include/footer.php"; ?>