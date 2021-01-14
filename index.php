<?php
$link = mysqli_connect("db", "root", "pass");
    
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    
    echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
    $andrea = "ciao";
    echo $andrea;
    if($_SERVER['SERVER_METHOD'] === 'GET'){
        echo "il metodo usato è GET";
    }
    else {
        echo "il metodo usato non è GET";
    }
    