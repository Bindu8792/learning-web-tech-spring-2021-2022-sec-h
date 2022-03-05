<?php

if(isset($_REQUEST['submit']))
{
    $gender = $_REQUEST['gender'];
    if($gender == ""){
        echo "Value is NULL!";
    }
    
    else{
        echo $gender;
    }   
}

else{
    echo "Invalid request...";
}

?>