<?php
    $conn = pg_connect("postgres://vtqflwakisrnwx:19b2ede6da29c8e4ba30676e9f500d64b30b9ffea919f3c8cc382cecda59107e@ec2-18-208-24-104.compute-1.amazonaws.com:5432/d873l014qbmotv
    ");

    if(!$conn){
        die("Can not connect database");
    } 
?>
