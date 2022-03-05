<?php

if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    if($name == ""){
        echo "Value is NULL!";
    }
    
    else{
        echo $name;
    }	
}

else{
    echo "Invalid request...";
}

?>