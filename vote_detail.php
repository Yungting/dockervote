<html lang="en">
    <head>

    <?php

        include("mysql/mysql.php");

        $id = $_GET["id"];
        $detail_vote = mysqli_query($link, "SELECT * FROM vote WHERE v_id = '$id' ");
        $row = mysqli_fetch_assoc($detail_vote);
    ?>

        <meta charset="UTF-8">
        <title>詳細資訊</title>
    </head>
    <body>

    <ul>
        <li>圖片：<img src=' <?php echo $row["v_photo"]; ?>'</li>
        <li>標題：<?php echo $row["v_title"]; ?> </li>
        <li>發起人：<?php echo $row["v_user"]; ?></li>
        <li>描述：<?php echo $row["v_depiction"]; ?></li>
        <li>選項：</li>
        
        <ul>
            <?php
                for($i=1; $i<=5; $i++){
                    if(empty($row['v_option'.$i]) == FALSE && $row['v_option'.$i] != "NULL"){
                        if( is_null($row['option'.$i.'_number']) == 1){
                            $number = 0;
                        }else{
                            $number = explode(',', $row['option'.$i.'_number']);
                            $number = count($number);
                        }
                        echo "<li>".$row['v_option'.$i]."：".$number."票</li>";
                    }
                }
            ?>
        </ul>
        <form action="cast_vote.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value=" <?php echo $id; ?> ">
            <input type="submit" value="我要投票">
        </form>
    </ul>
    </body>
</html>





