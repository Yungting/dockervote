<?php
header("Content-Type:text/html; charset=utf-8");

include("mysql/mysql.php");
$all_vote = mysqli_query($link, "SELECT * FROM vote ORDER BY v_id DESC");

while($row = mysqli_fetch_assoc($all_vote)){
    $id = $row["v_id"];
    //echo "<img src='".$row["v_photo"]."'>";
    echo 'ID: '.$id;
    echo "Photo: ". $row["v_photo"];
    echo "Title: ". $row["v_title"];
    echo "Depiction: ". $row["v_depiction"];
    echo "User: ". $row["v_user"];
    echo "<a href='vote_detail.php?id=".$id."'><button>查看詳情</button><a/>";
    echo "<br>";
}