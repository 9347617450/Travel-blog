<?php

    $server="sql202.epizy.com";
    $username="epiz_30584396";
    $password="ajJQTTLmEInfvq";
    $dbname="epiz_30584396_tejas";

    $conn=mysqli_connect($server,$username,$password,$dbname);
    if(!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }
?>