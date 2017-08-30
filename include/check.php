<?php session_start(); ?>
<?php

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['sid'])) {
       
      $str = './main.php?s=f';
      redirect($str); 
     }
else{
  if(!isset($_SESSION['sid'])) {
    $str = './index.php?s=t';
    redirect($str);
  }
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