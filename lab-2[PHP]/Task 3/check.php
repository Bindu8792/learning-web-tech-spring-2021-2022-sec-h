<?php

if(isset($_REQUEST['submit']))
{
    $dob = $_REQUEST['dob'];
    if($dob == ""){
        echo "Value is NULL!";
    }
    
    else{
        echo $dob;
    }	
}

else{
    echo "Invalid request...";
}

?>