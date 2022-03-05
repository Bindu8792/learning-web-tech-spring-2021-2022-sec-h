<?php

if(isset($_REQUEST['submit']))
{
    $degree = $_REQUEST['degree'];
    if($degree == ""){
        echo "Value is NULL!";
    }
    
    else{
        echo $degree;
    }	
}

else{
    echo "Invalid request...";
}

?>