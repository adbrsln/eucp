<?php 
include 'include/db.php';


if(isset($_POST['num']))
{ 
    $u = strtolower($_POST['user']);
    $p = $_POST['pass'];
    $n1 = $_POST['num'];

    $query="SELECT * FROM eucpadmins WHERE id = '$n1'";
    $result=mysqli_query($dbacc,$query);
    $num=mysqli_num_rows($result);
   
		if ($p != ''){

		$encrypted_mypassword = md5($p);
		$query = "UPDATE eucpadmins set username = '$u' , password = '$encrypted_mypassword'  where id = $n1";
		mysqli_query($dbacc,$query) or die ("Error Query [".$strSQL."]");
		$query = "FLUSH PRIVILEGES";
		echo '<meta http-equiv="refresh" content="0;url=settingsu.php?s=t">'; 
		
		}
		
}
else
    {
        
    $u = strtolower($_POST['user']);
    $p = $_POST['pass'];
    $encrypted_mypassword = md5($p);

    $query = "INSERT INTO eucpadmins (username, password) 
    VALUES ('$u', '$encrypted_mypassword')";
    mysqli_query($dbacc,$query) or die ("Error Query ");
    
                
    echo '<meta http-equiv="refresh" content="0;url=settingsu.php?s=t">'; 

    }



?>