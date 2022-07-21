<?php      
    $server = "localhost";  
    $user = "**";  
    $pas = '**';  
    $db_name = "***";
    
    $con = mysqli_connect($server, $user, $pas, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
?>  
