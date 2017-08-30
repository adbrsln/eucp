<?php
    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    
    echo '<meta http-equiv="refresh" content="0;url=main.php?s=tlo">';
?>