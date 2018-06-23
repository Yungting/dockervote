<?php

include("mysql/mysql.php");
$id = $_POST["id"];
$detail_vote = mysqli_query($link, "SELECT * FROM vote WHERE v_id = '$id' ");
$row = mysqli_fetch_assoc($detail_vote);

$option = implode(" ",$_POST["radio"]);
$u_id = "hi";
$option = explode(" ",$option);

for($i=0; $i<count($option); $i++){
    $option_number = $option[$i]."_number"; 
    if( is_null($row[$option_number]) == 1){
        $insert = mysqli_query($link, "UPDATE vote SET $option_number = '$u_id' WHERE v_id = '$id'");
    }else{
        //把新的user的名字放入option的最後面
        $insert = mysqli_query($link, "UPDATE vote SET $option_number = CONCAT($option_number, ',$u_id') WHERE v_id = '$id'");
    }
    
}

header("Location: vote_detail.php?id=".$id);