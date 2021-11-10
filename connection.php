<?php
    $conn = pg_connect("postgres://enxgowhdfrtzxh:f25f60c0faf5de5b9309606708f7f04bc26093660a5126fe91c375807354d588@ec2-44-193-182-0.compute-1.amazonaws.com:5432/d1589ed4ssmpbe");

    if(!$conn){
        die("Can not connect database");
    } 
?>
