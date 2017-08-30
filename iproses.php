
<?php
include 'include/check.php';
include 'include/db.php';
if (isset($_GET['id'])){
    
    if ($_GET['t'] == 'del'){
       
        $query = "DELETE FROM products where id = '$id'";
        mysqli_query($dbtask,$query) or die ("Error Query");;
        $query = "FLUSH PRIVILEGES";
        echo '<meta http-equiv="refresh" content="0;url=./settings.php?s=t">'; 
    }
    else echo '<meta http-equiv="refresh" content="0;url=./settings.php?s=f">'; 
    
}
if ($_GET['t'] == 'add'){
    $productName = $_POST['pn'];
    $productPrice = $_POST['pp'];
    $productDesc = $_POST['c'];
    $productCode = $_POST['tc'];
    
    $query = "INSERT INTO products (name,price,taskcode,content,status) VALUES ('$productName', '$productPrice', '$productCode','$productDesc',1)";
    var_dump($query);
    mysqli_query($db,$query) or die ("Error Query ");
    $query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=./settings.php?s=t">';  
}
else if ($_GET['t'] == 'edit'){
    $productName = $_POST['pn'];
    $productPrice = $_POST['pp'];
    $productCode = $_POST['tc'];
    $query = "UPDATE products SET  name ='$productName' ,price ='$productPrice' ,taskcode = '$productCode',status = 1)";
    mysqli_query($db,$query) or die ("Error Query ");;
    $query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=./settings.php?s=t">'; 
}
//else echo '<meta http-equiv="refresh" content="0;url=./settings.php?s=f">'; 

?>