
 <?php
    if(isset($_GET['s'])){
        $s = $_GET['s'];
        switch ($s){
        case 'tlo':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "Successfully logout from the system", "success");</script>';
        break;
        case 'tl':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "Login is Successful", "success");</script>';
        break;
        case 'fl':
        echo  '<script type="text/javascript" language="javascript"> swal("Failed", "Aww. Login is failed , check your username or password", "error");
        </script>';
        break;
        case 't':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "Transaction is Successful", "success");</script>';
        break;
        case 'f':
        echo  '<script type="text/javascript" language="javascript"> swal("Failed", "Aww. Transaction is failed ", "error");
        </script>';
        break;
        case 'vt':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful add as VIP", "The action has been done", "success");</script>';
        break;
        case 'vf':
        echo  '<script type="text/javascript" language="javascript">
        swal("Fail add as VIP", "The action has been done", "error");</script>';
        break;
        case 'bt':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "The account has been BAN", "success");</script>';
        break;
        case 'bf':
        echo  '<script type="text/javascript" language="javascript">
        swal("Failed", "The action has failed", "error");</script>';
        break;
        case 'ut':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "The account has been UNBAN", "success");</script>';
        break;
        case 'uf':
        echo  '<script type="text/javascript" language="javascript">
        swal("Failed", "The action has failed", "error");</script>';
        break;
        case 'rvt':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "The action has done", "success");</script>';
        break;
        case 'rt':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "Sucessfuly send the reward", "success");</script>';
        break;
        case 'rf':
        echo  '<script type="text/javascript" language="javascript">
        swal("Failed", "Fail to send the reward", "error");</script>';
        break;
        case 'jt':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "Sucessfuly send the character to prison", "success");</script>';
        break;
        case 'jf':
        echo  '<script type="text/javascript" language="javascript">
        swal("Failed", "Fail to send the character to prison", "error");</script>';
        break;
        case 'ujt':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "Sucessfuly send the character out from prison", "success");</script>';
        break;
        case 'ujf':
        echo  '<script type="text/javascript" language="javascript">
        swal("Failed", "Fail to send the character out from prison", "error");</script>';
        break;
        case 'mt':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "Sucessfuly mute the character", "success");</script>';
        break;
        case 'mf':
        echo  '<script type="text/javascript" language="javascript">
        swal("Failed", "Fail to mute the character", "error");</script>';
        break;
        case 'umt':
        echo  '<script type="text/javascript" language="javascript">
        swal("Successful", "Sucessfuly unmute the character", "success");</script>';
        break;
        case 'umf':
        echo  '<script type="text/javascript" language="javascript">
        swal("Failed", "Fail to unmute the character", "error");</script>';
        break;
    default:
        }
}
?>

<div class="container">

        <hr>

        <!-- Footer -->
        <footer class="footer">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <strong>Eujin Online </strong> 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="./include/dataTables/jquery.dataTables.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/transition.js"></script>
    <script type="text/javascript" src="js/collapse.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="include/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="js/dataTables.rowReorder.min.js"></script>
 	<script>
    $(document).ready(function() {
        var table = $('#dataTables-example').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );

        $('#datetimepicker1').datetimepicker();
    });

   
    
    </script>
    <script>
        $('#btn-submit').on('click',function(e){
        e.preventDefault();
        var form = $(this).parents('myform');
        swal({
            title: "Are you sure your details is Correct?",
            text: "You will cannot undo this form",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            closeOnConfirm: false
        }, function(isConfirm){
            if (isConfirm) {
                // var recaptcha = $("#g-recaptcha-response").val();
                //    if (recaptcha === "") {
                //       event.preventDefault();
                //       alert("Please check the recaptcha");
                //    }else
                   form.submit();
                }
                
        });
    });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        var x_timer;    
        $("#username").on('keyup blur', function (e){
            clearTimeout(x_timer);
            var user_name = $(this).val();
            x_timer = setTimeout(function(){
                check_username_ajax(user_name);
            }, 1000);
        }); 
        
        $("#usernamevip").on('keyup blur', function (e){
            clearTimeout(x_timer);
            var user_name = $(this).val();
            x_timer = setTimeout(function(){
                check_username_ajaxvip(user_name);
            }, 1000);
        }); 

    function check_username_ajax(username){
        $("#user-result").html('<img src="image/ajaxloader.gif" />');
        $.post('u-checker.php', {'username':username}, function(data) {
        $("#user-result").html(data);
        });
    }
    

    function check_username_ajaxvip(username){
        $("#user-result").html('<img src="image/ajaxloader.gif" />');
        $.post('vipchecker.php', {'username':username}, function(data) {
        $("#user-result").html(data);
        });
    }
    });

$('#confirmation').click(function(e) {
    e.preventDefault(); // Prevent the href from redirecting directly
    var linkURL = $(this).attr("href");
    warnBeforeRedirect(linkURL);
    });

    function warnBeforeRedirect(linkURL) {
        swal({
        title: "Are you sure?", 
        text: "Caution! You cannot reverse this!", 
        type: "warning",
        showCancelButton: true
        }, function() {
        // Redirect the user
        window.location.href = linkURL;
        });
    }

function enableBtn(){
    document.getElementById("btn-submit").disabled = false;
   }
</script>


</body>

</html>
