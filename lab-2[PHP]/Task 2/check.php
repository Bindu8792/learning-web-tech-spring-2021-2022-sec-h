<?php

if(isset($_REQUEST['submit']))
{
    $email = $_REQUEST['email'];
    if($email == ""){
        echo "Value is NULL!";
    }
    
    else{
        echo $email;
    }	
}

else{
    echo "Invalid request...";
}

?>