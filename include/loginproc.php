<?php session_start();
include 'db.php';

// Retrieve username and password from database according to user's input
$username=mysqli_real_escape_string($dbacc,$_POST['user']);
$password=mysqli_real_escape_string($dbacc,$_POST['pass']);
$encrypted_mypassword=md5($password);
$sql = "SELECT * FROM eucpadmins WHERE (username = '$username') and (password = '$encrypted_mypassword')";
$login = mysqli_query($dbacc,$sql);
$count = mysqli_num_rows($login) ;


// Check username and password match

 while($row = mysqli_fetch_assoc($login)){
        $_SESSION['sid'] = $row['id']; //staff id
        
    }

 if ($count != "") {
    $str = '../index.php?s=t';
	redirect($str);   
}
else {
	$str = '../main.php?s=f';
    redirect($str); 

}   



function redirect($url)
    {
        if (!headers_sent())
        {    
            header('Location: '.$url);
            exit;
            }
        else
            {  
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
    }


?>