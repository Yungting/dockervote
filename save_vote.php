<?php

include("mysql/mysql.php");
$id = $_POST["id"];
$option = implode(" ",$_POST["radio"]);
$u_id = "hi";
$option = explode(" ",$option);

for($i=0; $i<count($option); $i++){

    if()


    //把新的user的名字放入option的最後面
    $option_number = $option[$i]."_number";
    $insert = mysqli_query($link, "UPDATE vote SET $option_number = CONCAT($option_number, ',$u_id') WHERE v_id = '$id'");
}